<?php

namespace App\Http\Controllers;

use App\Models\Assignatura;
use App\Models\Grau;
use Illuminate\Http\Request;
use DB;

/**
 * Class AssignaturaController
 * @package App\Http\Controllers
 */
class AssignaturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $assignaturas = Assignatura::paginate();
        $profesores = DB::table('professors')->get();

        return view('assignatura.index', compact('assignaturas','profesores'))
            ->with('i', (request()->input('page', 1) - 1) * $assignaturas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $assignatura = new Assignatura();
        $graus = Grau::all();
        $profesores = DB::table('professors')->get();
        return view('assignatura.create', compact('assignatura','graus','profesores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Assignatura::$rules);

        $assignatura = Assignatura::create($request->all());

        return redirect()->route('assignaturas.index')
            ->with('success', 'Asignatura creada correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $codi
     * @return \Illuminate\Http\Response
     */
    public function show($codi)
    {
        $assignatura = Assignatura::find($codi);
        $profesores = DB::table('professors')->get();

        $temas = DB::table('temas')
        ->where('codi_assignatura',"=",$codi)
        ->get();


        return view('assignatura.show', compact('assignatura','profesores','temas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $assignatura = Assignatura::find($id);
        $graus = Grau::all();
        $profesores = DB::table('professors')->get();

        return view('assignatura.edit', compact('assignatura','graus','profesores'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Assignatura $assignatura
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Assignatura $assignatura)
    {
        request()->validate(Assignatura::$rules);

        $assignatura->update($request->all());

        return redirect()->route('assignaturas.index')
            ->with('success', 'Assignatura editada correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($codi)
    {
        $notificacio = DB::table('notificacio')
        ->where('codi_assignatura',"=",$codi)
        ->update(['codi_assignatura'=>null]);
    
        $faqs = DB::table('faqs')
        ->where('codi_assignatura',"=",$codi)
        ->update(['codi_assignatura'=>null]);

        $temas = DB::table('temas')
        ->where('codi_assignatura',"=",$codi)
        ->update(['codi_assignatura'=>null]);

        $professors = DB::table('professors')
        ->where('codi_assignatura',"=",$codi)
        ->delete();

        $estudiants = DB::table('estudiants')
        ->where('codi_assignatura',"=",$codi)
        ->delete();

        $sequenciatemari = DB::table('sequenciatemari')
        ->where('codi_assignatura',"=",$codi)
        ->delete();

        $assignatura = Assignatura::find($codi)->delete();

        return redirect()->route('assignaturas.index')
            ->with('success', 'Assignatura eliminada correctamente');
    }
}
