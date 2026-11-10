<?php

namespace App\Http\Controllers;

use App\Models\Oportunidad;
use App\Models\Postulacion;
use Illuminate\Http\Request;

class OportunidadController extends Controller
{
    public function index(Request $request)
    {
        $query = Oportunidad::query();

        if ($request->has('search') && $request->search != '') {
            $search = $request->search;
            $query->where('titulo', 'LIKE', "%{$search}%")
                  ->orWhere('descripcion', 'LIKE', "%{$search}%")
                  ->orWhere('ubicacion', 'LIKE', "%{$search}%")
                  ->orWhere('categoria', 'LIKE', "%{$search}%");
        }

        $oportunidades = $query->latest()->get();

        return view('oportunidades.index', compact('oportunidades'));
    }

    public function show($id)
    {
        $oportunidad = Oportunidad::findOrFail($id);
        $yaPostulado = false;

        if (auth()->check()) {
            $yaPostulado = Postulacion::where('user_id', auth()->id())
                ->where('oportunidad_id', $id)
                ->exists();
        }

        return view('oportunidades.show', compact('oportunidad', 'yaPostulado'));
    }

    public function create()
    {
        return view('organizacion.crear-oportunidad');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'categoria' => 'required|string',
            'ubicacion' => 'required|string',
            'fecha' => 'required|date',
            'descripcion' => 'required|string',
        ]);

        Oportunidad::create([
            'titulo' => $request->titulo,
            'categoria' => $request->categoria,
            'ubicacion' => $request->ubicacion,
            'fecha' => $request->fecha,
            'descripcion' => $request->descripcion,
            'organizacion' => auth()->user()->nombre_organizacion ?? auth()->user()->name,
            'user_id' => auth()->id(),
            'imagen' => 'bosques.jpg',
        ]);

        return redirect()->route('dashboard')->with('success', '¡Convocatoria publicada con éxito!');
    }

    // Procesa la postulación del voluntario
    public function mePostulo(Request $request, $id)
    {
        if (!auth()->check()) {
            return redirect()->route('login');
        }

        $existe = Postulacion::where('user_id', auth()->id())
            ->where('oportunidad_id', $id)
            ->exists();

        if (!$existe) {
            Postulacion::create([
                'user_id' => auth()->id(),
                'oportunidad_id' => $id,
                'estado' => 'pendiente',
                'mensaje' => $request->mensaje ?? 'Interesado en participar.',
            ]);
        }

        return redirect()->back()->with('success', '¡Tu postulación ha sido enviada a la organización!');
    }

    // Cambiar estado de postulación (aceptar / rechazar voluntario)
    public function cambiarEstadoPostulacion(Request $request, $id)
    {
        $postulacion = Postulacion::findOrFail($id);
        $postulacion->update(['estado' => $request->estado]);

        return redirect()->back()->with('success', 'Estado del voluntario actualizado.');
    }

    public function toggleFavorito($id)
    {
        if (!auth()->check()) {
            return response()->json(['success' => false, 'redirect' => route('login')], 401);
        }

        $user = auth()->user();
        $favoritos = $user->favoritos();

        if ($favoritos->where('oportunidad_id', $id)->exists()) {
            $favoritos->detach($id);
            $attached = false;
        } else {
            $favoritos->attach($id);
            $attached = true;
        }

        return response()->json([
            'success' => true,
            'is_favorite' => $attached,
            'message' => $attached ? 'Añadido a favoritos' : 'Eliminado de favoritos'
        ]);
    }
}