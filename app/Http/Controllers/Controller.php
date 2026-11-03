<?php

namespace App\Http\Controllers;

use App\Models\Oportunidad;
use App\Models\Categoria;
use Illuminate\Http\Request;

class OportunidadController extends Controller
{
    // Muestra el catálogo de oportunidades
    public function index()
    {
        $oportunidades = Oportunidad::with('categoria')->get();
        return view('oportunidades', compact('oportunidades'));
    }

    // Muestra el formulario para crear una nueva oportunidad
    public function create()
    {
        $categorias = Categoria::all();
        return view('organizacion.crear-oportunidad', compact('categorias'));
    }

    // Guarda los datos en la base de datos MySQL
    public function store(Request $request)
    {
        $request->validate([
            'id_categoria' => 'required|exists:categorias,id_categoria',
            'titulo'       => 'required|string|max:150',
            'descripcion'  => 'required|string',
            'ubicacion'    => 'required|string|max:150',
            'fecha'        => 'required|date',
            'hora_inicio'  => 'required',
            'hora_fin'     => 'required',
            'cupos'        => 'required|integer|min:1',
            'requisitos'   => 'nullable|string',
        ]);

        // Se asigna la primera organización registrada temporalmente o la del usuario autenticado
        $idOrganizacion = auth()->user()?->organizacion?->id_organizacion ?? 1;

        Oportunidad::create([
            'id_organizacion' => $idOrganizacion,
            'id_categoria'    => $request->id_categoria,
            'titulo'          => $request->titulo,
            'descripcion'     => $request->descripcion,
            'ubicacion'       => $request->ubicacion,
            'fecha'           => $request->fecha,
            'hora_inicio'     => $request->hora_inicio,
            'hora_fin'        => $request->hora_fin,
            'cupos'           => $request->cupos,
            'requisitos'      => $request->requisitos,
            'estado'          => 'disponible',
        ]);

        return redirect()->route('oportunidades.index')->with('success', '¡Oportunidad creada con éxito!');
    }
}