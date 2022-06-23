<?php

namespace App\Http\Controllers;

use App\Models\Microcontingut;
use App\Models\Microleccion;
use App\Models\Tema;
use Illuminate\Http\Request;
use DB;

/**
 * Class MicrocontingutController
 * @package App\Http\Controllers
 */
class MicrocontingutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $microcontinguts = Microcontingut::paginate();
        $profesores = DB::table('professors')->get();
        $microleccions = Microleccion::all();
        $temas = Tema::all();
        $opcions = DB::table('opciones')->get();

        return view('microcontingut.index', compact('microcontinguts','profesores','microleccions','temas','opcions'))
            ->with('i', (request()->input('page', 1) - 1) * $microcontinguts->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $microcontingut = new Microcontingut();
        $profesores = DB::table('professors')->get();
        $microleccions =  DB::table('microleccions')->get();
        $temas =  DB::table('temas')->get();
        return view('microcontingut.create', compact('microcontingut','profesores','microleccions','temas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Microcontingut::$rules);

        $microcontingut = Microcontingut::create($request->all());

        return redirect()->route('microcontinguts.index')
            ->with('success', 'Microcontenido creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $microcontingut = Microcontingut::find($id);
        $profesores = DB::table('professors')->get();
        $microleccions = Microleccion::all();
        $temas = Tema::all();
        $opciones = DB::table('opciones')
        ->where('id_microcontingut',"=",$id)
        ->get();

        return view('microcontingut.show', compact('microcontingut','profesores','microleccions','temas','opciones'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $microcontingut = Microcontingut::find($id);
        $profesores = DB::table('professors')->get();
        $microleccions =  DB::table('microleccions')->get();
        $temas =  DB::table('temas')->get();

        return view('microcontingut.edit', compact('microcontingut','profesores','microleccions','temas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Microcontingut $microcontingut
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Microcontingut $microcontingut)
    {
        request()->validate(Microcontingut::$rules);

        $microcontingut->update($request->all());

        return redirect()->route('microcontinguts.index')
            ->with('success', 'Microcontenido editado correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $leitner = DB::table('leitner_system')
        ->where('id_microcontingut',"=",$id)
        ->update(['id_microcontingut'=>null]);

        $opciones = DB::table('opciones')
        ->where('id_microcontingut',"=",$id)
        ->update(['id_microcontingut'=>null]);

        $respuestas = DB::table('respuesta')
        ->where('id_microcontingut',"=",$id)
        ->update(['id_microcontingut'=>null]);

        $microcontingut = Microcontingut::find($id)->delete();
        return redirect()->route('microcontinguts.index')
            ->with('success', 'Microcontenido borrado correctamente');
    }
}
