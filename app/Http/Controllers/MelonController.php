<?php

namespace App\Http\Controllers;

use App\Models\Melon;
use Illuminate\Http\Request;
use Auth;
use DB;

/**
 * Class MelonController
 * @package App\Http\Controllers
 */
class MelonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $melons = Melon::paginate();

        return view('melon.index', compact('melons'))
            ->with('i', (request()->input('page', 1) - 1) * $melons->perPage());
    }

    public function indexmio()
    {
        $niu =  Auth::user()->niu; 
        $user = DB::table('melons')
                ->where('niu',"=",$niu)
                ->get();
        return view('melon.index', compact('user'))
            ->with('i', (request()->input('page', 1) - 1) * $melons->perPage());
        //return view('perfil', ['user'=>$user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $melon = new Melon();
        return view('melon.create', compact('melon'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Melon::$rules);

        $melon = Melon::create($request->all());

        return redirect()->route('melons.index')
            ->with('success', 'Melon created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $melon = Melon::find($id);

        return view('melon.show', compact('melon'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $melon = Melon::find($id);

        return view('melon.edit', compact('melon'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Melon $melon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Melon $melon)
    {
        request()->validate(Melon::$rules);

        $melon->update($request->all());

        return redirect()->route('melons.index')
            ->with('success', 'Melon updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $melon = Melon::find($id)->delete();

        return redirect()->route('melons.index')
            ->with('success', 'Melon deleted successfully');
    }
}
