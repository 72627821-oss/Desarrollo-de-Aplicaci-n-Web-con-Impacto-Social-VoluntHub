<?php

namespace App\Http\Controllers;

use App\Models\Oportunidad;
use Illuminate\Http\Request;

class OportunidadController extends Controller
{
    public function index(Request $request)
    {
        $query = Oportunidad::query();

        if ($request->has('search')) {
            $query->where('titulo', 'like', '%' . $request->search . '%')
                  ->orWhere('ubicacion', 'like', '%' . $request->search . '%');
        }

        $oportunidades = $query->latest()->get();

        return view('oportunidades.index', compact('oportunidades'));
    }

    public function show($id)
    {
        $oportunidad = Oportunidad::find($id);

        if (!$oportunidad) {
            $oportunidad = (object)[
                'id' => $id,
                'titulo' => 'Causa Social en Cusco',
                'organizacion' => 'Organización Local',
                'categoria' => 'Voluntariado',
                'ubicacion' => 'Cusco, Perú',
                'fecha' => 'Próximamente',
                'descripcion' => 'Descripción detallada del voluntariado y su impacto en la comunidad.'
            ];
        }

        return view('oportunidades.show', compact('oportunidad'));
    }

    // Método para manejar la acción del corazón (favorito)
    public function toggleFavorito($id)
    {
        if (!auth()->check()) {
            return response()->json(['error' => 'Unauthenticated'], 401);
        }

        return response()->json(['success' => true]);
    }
}