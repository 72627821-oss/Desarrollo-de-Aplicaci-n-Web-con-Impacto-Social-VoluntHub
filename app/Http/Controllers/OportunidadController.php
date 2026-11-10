<?php

namespace App\Http\Controllers;

use App\Models\Oportunidad;
use App\Models\Postulacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

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

        $op = new Oportunidad();
        $op->titulo = $request->titulo;
        $op->categoria = $request->categoria;
        $op->ubicacion = $request->ubicacion;
        $op->fecha = $request->fecha;
        $op->descripcion = $request->descripcion;
        $op->organizacion = auth()->user()->nombre_organizacion ?? auth()->user()->name;
        $op->user_id = auth()->id();
        $op->imagen = 'bosques.jpg';

        // Solo se asigna si la columna existe físicamente en la BD
        if (Schema::hasColumn('oportunidades', 'id_organizacion')) {
            $op->id_organizacion = null; // Para no activar llaves foráneas rotas
        }
        if (Schema::hasColumn('oportunidades', 'id_categoria')) {
            $op->id_categoria = null;
        }

        $op->save();

        return redirect()->route('dashboard')->with('success', '¡Convocatoria publicada con éxito!');
    }

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

        return redirect()->back()->with('success', '¡Tu postulación ha sido enviada!');
    }

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