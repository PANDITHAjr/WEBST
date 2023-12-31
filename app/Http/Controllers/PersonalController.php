<?php

namespace App\Http\Controllers;

use App\Models\Personal;
use App\Models\TipoPersonal;
use App\Models\Sindicato;
use Illuminate\Http\Request;

class PersonalController extends Controller
{
    public function index(Request $request)
{
    // $personales = Personal::all();
        // return view('personal.index', compact('personales'));

    $buscar = $request->input('buscar');
    $refrescar = $request->input('refrescar');

    $personales = Personal::query();

    if ($buscar) {
        $personales->where('nombre', 'like', "%$buscar%")
                  ->orWhere('ci', 'like', "%$buscar%")
                  ->orWhere('apellido', 'like', "%$buscar%");
    }

    if ($refrescar) {
        // Si se solicita refrescar, obtenemos todos los registros sin paginación.
        $personales = $personales->get();
    } else {
        // Aplicamos la paginación con un límite de 10 registros por página.
        $personales = $personales->paginate(10);
    }

    return view('personal.index', compact('personales'));
}


    public function create(){
        $tipopersonal = TipoPersonal::all();
        $sindicato = Sindicato::all();
        return view('personal.create', compact('tipopersonal'), compact('sindicato'));
    }
    public function store(Request $request)
    {
        $personal = new Personal();
        $personal->ci = $request->input('ci');
        $personal->nombre = $request->input('nombre');
        $personal->apellido = $request->input('apellido');
        $personal->edad = $request->input('edad');
        $personal->telefono = $request->input('telefono');
        $personal->direccion = $request->input('direccion');
        $personal->cat_lic = $request->input('cat_lic');
        $personal->id_tipopersonal = $request->input('id_tipopersonal');
        $personal->id_sindicato = $request->input('id_sindicato');
        $personal->save();

        return redirect()->route('personal.index', $personal->id);
    }
    public function show($id)
    {
        $personal = Personal::findOrFail($id);
        return view('personal.show', compact('personal'));
    }

    public function edit($id)
    {

        $personal = Personal::findOrFail($id);
        $tipopersonal = TipoPersonal::all();
        $sindicato = Sindicato::all();
        return view('personal.edit', compact('personal', 'tipopersonal'), compact('personal', 'sindicato'));
    }
    public function update(Request $request, $id)
    {
        $personal = Personal::findOrFail($id);
        $personal->ci = $request->input('ci');
        $personal->nombre = $request->input('nombre');
        $personal->apellido = $request->input('apellido');
        $personal->edad = $request->input('edad');
        $personal->telefono = $request->input('telefono');
        $personal->direccion = $request->input('direccion');
        $personal->cat_lic = $request->input('cat_lic');
        $personal->id_tipopersonal = $request->input('id_tipopersonal');
        $personal->id_sindicato = $request->input('id_sindicato');
        $personal->save();

        return redirect()->route('personal.index');
    }
    public function destroy($id)
    {
        $personal = Personal::findOrFail($id);
        $personal->delete();

        return redirect()->route('personal.index');
    }
}
