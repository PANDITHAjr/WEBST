<?php

namespace App\Http\Controllers;

use App\Models\Ruta;
use Illuminate\Http\Request;

class RutaController extends Controller
{
    public function index(Request $request)
    {
        $buscar = $request->input('buscar');
        $refrescar = $request->input('refrescar');

        $rutas = Ruta::query();

        if ($buscar) {
            $rutas->where('origen', 'like', "%$buscar%")
                  ->orWhere('destino', 'like', "%$buscar%");
        }

        if ($refrescar) {
            // Si se solicita refrescar, obtenemos todos los registros sin paginación.
            $rutas = $rutas->get();
        } else {
            // Aplicamos la paginación con un límite de 10 registros por página.
            $rutas = $rutas->paginate(10);
        }

        return view('ruta.index', compact('rutas'));
    }


    public function create()
    {
        return view('ruta.create');
    }

    public function store(Request $request)
    {
        $ruta = new Ruta();
        $ruta->origen = $request->input('origen');
        $ruta->destino = $request->input('destino');
        $ruta->tarifa = $request->input('tarifa');
        $ruta->save();

        return redirect()->route('ruta.index');
    }

    public function show($id)
    {
        $ruta = Ruta::findOrFail($id);
        return view('ruta.show', compact('ruta'));
    }

    public function edit($id)
    {
        $ruta = Ruta::findOrFail($id);
        return view('ruta.edit', compact('ruta'));
    }

    public function update(Request $request, $id)
    {
        $ruta = Ruta::findOrFail($id);
        $ruta->origen = $request->input('origen');
        $ruta->destino = $request->input('destino');
        $ruta->tarifa = $request->input('tarifa');
        $ruta->save();

        return redirect()->route('ruta.index');
    }
    public function destroy($id)
    {
        $ruta = Ruta::findOrFail($id);
        $ruta->delete();

        return redirect()->route('ruta.index');
    }
}
