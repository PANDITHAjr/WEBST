<?php

namespace App\Http\Controllers;

use App\Models\Mantenimiento;
use App\Models\Vehiculo;
use Illuminate\Http\Request;

class MantenimientoController extends Controller
{
    public function index()
    {
        $mantenimientos = Mantenimiento::all();
        return view('mantenimiento.index', compact('mantenimientos'));
    }

    public function create()
    {
        $vehiculo = Vehiculo::all();
        return view('mantenimiento.create', compact('vehiculo'));
    }

    public function store(Request $request)
    {
        $mantenimiento = new Mantenimiento();
        $mantenimiento->descripcion = $request->input('descripcion');
        $mantenimiento->fecha = $request->input('fecha');
        $mantenimiento->monto = $request->input('monto');
        $mantenimiento->id_vehiculo = $request->input('id_vehiculo');
        $mantenimiento->save();

        return redirect()->route('mantenimiento.index');
    }

    public function show($id)
    {
        $mantenimiento = Mantenimiento::findOrFail($id);
        return view('mantenimiento.show', compact('mantenimiento'));
    }

    public function edit($id)
    {
        $mantenimiento = Mantenimiento::findOrFail($id);
        $vehiculo = Vehiculo::all();
        return view('mantenimiento.edit', compact('mantenimiento'), compact('vehiculo'));
    }

    public function update(Request $request, $id)
    {
        $mantenimiento = Mantenimiento::findOrFail($id);
        $mantenimiento->descripcion = $request->input('descripcion');
        $mantenimiento->fecha = $request->input('fecha');
        $mantenimiento->monto = $request->input('monto');
        $mantenimiento->id_vehiculo = $request->input('id_vehiculo');
        $mantenimiento->save();

        return redirect()->route('mantenimiento.index');
    }
    public function destroy($id)
    {
        $mantenimiento = Mantenimiento::findOrFail($id);
        $mantenimiento->delete();

        return redirect()->route('mantenimiento.index');
    }
}
