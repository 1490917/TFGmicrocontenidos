<?php

namespace App\Http\Controllers;

use App\Models\Microleccion;
use App\Models\Microcontingut;
use App\Models\Tema;
use App\Models\Assignatura;
use Illuminate\Http\Request;
use DB;

/**
 * Class MicroleccionController
 * @package App\Http\Controllers
 */
class MicroleccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $microleccions = Microleccion::paginate();
        $profesores = DB::table('professors')->get();
        $temas = DB::table('temas')->get();

        return view('microleccion.index', compact('microleccions','profesores','temas'))
            ->with('i', (request()->input('page', 1) - 1) * $microleccions->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $microleccion = new Microleccion();
        $profesores = DB::table('professors')->get();
        $temas = DB::table('temas')->get();
        return view('microleccion.create', compact('microleccion','profesores','temas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Microleccion::$rules);

        $microleccion = Microleccion::create($request->all());

        return redirect()->route('microleccions.index')
            ->with('success', 'Microleccion creada correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $microleccion = Microleccion::find($id);
        $profesores = DB::table('professors')->get();
        $temas = DB::table('temas')->get();
        $microcontinguts = DB::table('microcontinguts')
        ->where('microleccio_id',"=",$id)
        ->get();

        return view('microleccion.show', compact('microleccion','profesores','temas','microcontinguts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $microleccion = Microleccion::find($id);
        $profesores = DB::table('professors')->get();
        $temas =  Tema::all();

        return view('microleccion.edit', compact('microleccion','profesores','temas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Microleccion $microleccion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Microleccion $microleccion)
    {
        request()->validate(Microleccion::$rules);

        $microleccion->update($request->all());

        return redirect()->route('microleccions.index')
            ->with('success', 'Microleccion editada correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $microcontingut = DB::table('microcontinguts')
        ->where('microleccio_id',"=",$id)
        ->update(['microleccio_id'=>null]);

        $microleccion = Microleccion::find($id)->delete();
        return redirect()->route('microleccions.index')
            ->with('success', 'Microleccion borrada correctamente');
    }
}
