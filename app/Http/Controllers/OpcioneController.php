<?php

namespace App\Http\Controllers;

use App\Models\Opcione;
use Illuminate\Http\Request;
use DB;

/**
 * Class OpcioneController
 * @package App\Http\Controllers
 */
class OpcioneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $opciones = DB::table('opciones')->get();
        $microcontinguts = DB::table('microcontinguts')->get();
        $profesores = DB::table('professors')->get();
        $microleccions = DB::table('microleccions')->get();
        $temas = DB::table('temas')->get();

        return view('opcione.index', compact('opciones','microcontinguts','profesores','microleccions','temas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $opcione = new Opcione();
        $microcontinguts = DB::table('microcontinguts')->get();
        $profesores = DB::table('professors')->get();
        $microleccions = DB::table('microleccions')->get();
        $temas = DB::table('temas')->get();
        return view('opcione.create', compact('opcione','microcontinguts','profesores','microleccions','temas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Opcione::$rules);

        $opcione = Opcione::create($request->all());

        return redirect()->route('opciones.index')
            ->with('success', 'Opcion creada correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $opcione = Opcione::find($id);

        return view('opcione.show', compact('opcione'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $opcione = Opcione::find($id);
        $microcontinguts = DB::table('microcontinguts')->get();
        $profesores = DB::table('professors')->get();
        $microleccions = DB::table('microleccions')->get();
        $temas = DB::table('temas')->get();

        return view('opcione.edit', compact('opcione','microcontinguts','profesores','microleccions','temas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Opcione $opcione
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Opcione $opcione)
    {
        request()->validate(Opcione::$rules);

        $opcione->update($request->all());

        return redirect()->route('opciones.index')
            ->with('success', 'Opcion editada correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $opcione = DB::table('opciones')
        ->where('id',"=",$id)
        ->delete();
        return redirect()->route('opciones.index')
            ->with('success', 'Opcion eliminada correctamente');
    }
}
