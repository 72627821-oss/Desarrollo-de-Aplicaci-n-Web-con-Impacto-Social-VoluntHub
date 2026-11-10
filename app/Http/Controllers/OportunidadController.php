<?php

namespace App\Http\Controllers;

use App\Models\Oportunidad;
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

        $oportunidades = $query->get();

        return view('oportunidades.index', compact('oportunidades'));
    }

    public function show($id)
    {
        $oportunidad = Oportunidad::findOrFail($id);
        return view('oportunidades.show', compact('oportunidad'));
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
            'imagen' => 'bosques.jpg',
        ]);

        return redirect()->route('oportunidades.index')->with('success', '¡Oportunidad publicada correctamente!');
    }

    public function toggleFavorito($id)
    {
        return response()->json(['success' => true, 'message' => 'Favorito actualizado']);
    }
}