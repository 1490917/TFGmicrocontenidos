<?php

namespace App\Http\Controllers;

use App\Models\Grau;
use Illuminate\Http\Request;
use DB;

/**
 * Class GrauController
 * @package App\Http\Controllers
 */
class GrauController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $graus = Grau::paginate();

        return view('grau.index', compact('graus'))
            ->with('i', (request()->input('page', 1) - 1) * $graus->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $grau = new Grau();
        return view('grau.create', compact('grau'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Grau::$rules);

        $grau = Grau::create($request->all());

        return redirect()->route('graus.index')
            ->with('success', 'Grado creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param string $nom
     * @return \Illuminate\Http\Response
     */
    public function show($nom)
    {
        $graus = Grau::find($nom);
        $asignaturas = DB::table('assignaturas')
        ->where('nom_grau',"=",$nom)
        ->get();
        return view('grau.show', compact('graus','asignaturas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param string $nom
     * @return \Illuminate\Http\Response
     */
    public function edit($nom)
    {
        $grau = Grau::find($nom);
        //$grau = DB::table('graus')
        //->where('nom',"=",$nom)
        //->get();

        return view('grau.edit', compact('grau'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Grau $grau
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Grau $grau)
    {
        request()->validate(Grau::$rules);
        $grau->update($request->all());
        
        return redirect()->route('graus.index')
            ->with('success', 'Grado editado correctamente');
    }

    /**
     * @param string $nom
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($nom)
    {
        $assignaturas = DB::table('assignaturas')
            ->where('nom_grau',"=",$nom)
            ->update(['nom_grau'=>null]);
        
        $faqs = DB::table('faqs')
            ->where('nom_grau',"=",$nom)
            ->update(['nom_grau'=>null]);


        $grau = Grau::find($nom)->delete();

        return redirect()->route('graus.index')
            ->with('success', 'Grado eliminado correctamente');
    }
}
