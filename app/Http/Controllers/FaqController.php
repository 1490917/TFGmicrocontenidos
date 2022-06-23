<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;
use DB;

/**
 * Class FaqController
 * @package App\Http\Controllers
 */
class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faqs = Faq::all();
        $profesores = DB::table('professors')->get();
        $temas = DB::table('temas')->get();

        return view('faq.index', compact('faqs','profesores','temas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $faq = new Faq();
        $temas = DB::table('temas')->get();
        $graus = DB::table('graus')->get();
        $asignaturas = DB::table('assignaturas')->get();
        $profesores = DB::table('professors')->get();
        return view('faq.create', compact('faq','temas', 'graus','asignaturas','profesores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Faq::$rules);

        $faq = Faq::create($request->all());

        return redirect()->route('faqs.index')
            ->with('success', 'Faqs creadas correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $faq = Faq::find($id);
        $profesores = DB::table('professors')->get();
        $temas = DB::table('temas')->get();
        return view('faq.show', compact('faq','profesores','temas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $faq = Faq::find($id);
        $temas = DB::table('temas')->get();
        $graus = DB::table('graus')->get();
        $asignaturas = DB::table('assignaturas')->get();
        $profesores = DB::table('professors')->get();

        return view('faq.edit', compact('faq','temas', 'graus','asignaturas','profesores'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Faq $faq
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Faq $faq)
    {
        request()->validate(Faq::$rules);

        $faq->update($request->all());

        return redirect()->route('faqs.index')
            ->with('success', 'Faqs editadas correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {

        $faq = Faq::find($id)->delete();
        return redirect()->route('faqs.index')
            ->with('success', 'Faqs eliminadas correctamente');
    }
}
