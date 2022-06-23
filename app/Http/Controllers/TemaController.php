<?php

namespace App\Http\Controllers;

use App\Models\Tema;
use App\Models\Assignatura;
use Illuminate\Http\Request;
use DB;

/**
 * Class TemaController
 * @package App\Http\Controllers
 */
class TemaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $temas = Tema::paginate();
        $profesores = DB::table('professors')->get();

        return view('tema.index', compact('temas','profesores'))
            ->with('i', (request()->input('page', 1) - 1) * $temas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tema = new Tema();
        $asignaturas = DB::table('assignaturas')->get();
        $profesores = DB::table('professors')->get();
        return view('tema.create', compact('tema','asignaturas','profesores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Tema::$rules);

        $tema = Tema::create($request->all());

        return redirect()->route('temas.index')
            ->with('success', 'Tema creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tema = Tema::find($id);
        $profesores = DB::table('professors')->get();

        if($tema!=null){
            $microleccions = DB::table('microleccions')
            ->where('titol_tema',"=",$tema->titol)
            ->get();

        }else{
            $microleccions = DB::table('microleccions')->get();
        }


        return view('tema.show', compact('tema','profesores','microleccions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tema = Tema::find($id);
        $asignaturas = Assignatura::all();
        $profesores = DB::table('professors')->get();

        return view('tema.edit', compact('tema','asignaturas','profesores'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Tema $tema
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tema $tema)
    {
        request()->validate(Tema::$rules);

        $tema->update($request->all());

        return redirect()->route('temas.index')
            ->with('success', 'Tema editado correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {

        $tema = DB::table('temas')
        ->where('id',"=",$id)
        ->get();

        $titol = $tema->pluck('titol');

        $faqs = DB::table('faqs')
        ->where('titol_tema',"=",$titol)
        ->update(['titol_tema'=>null]);

        $microleccio = DB::table('faqs')
        ->where('titol_tema',"=",$titol)
        ->update(['titol_tema'=>null]);

        $sequenciatemari = DB::table('sequenciatemari')
        ->where('titol_tema',"=",$titol)
        ->delete();

        $tema = Tema::find($id)->delete();
        return redirect()->route('temas.index')
            ->with('success', 'Tema borrado correctamente');
    }
}
