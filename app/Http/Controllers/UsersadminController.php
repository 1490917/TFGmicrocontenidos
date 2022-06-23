<?php

namespace App\Http\Controllers;

use App\Models\Usersadmin;
use Illuminate\Http\Request;

/**
 * Class UsersadminController
 * @package App\Http\Controllers
 */
class UsersadminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usersadmins = Usersadmin::paginate();

        return view('usersadmin.index', compact('usersadmins'))
            ->with('i', (request()->input('page', 1) - 1) * $usersadmins->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usersadmin = new Usersadmin();
        return view('usersadmin.create', compact('usersadmin'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Usersadmin::$rules);

        $usersadmin = Usersadmin::create($request->all());

        return redirect()->route('usersadmins.index')
            ->with('success', 'Usuario creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usersadmin = Usersadmin::find($id);

        return view('usersadmin.show', compact('usersadmin'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usersadmin = Usersadmin::find($id);

        return view('usersadmin.edit', compact('usersadmin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Usersadmin $usersadmin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usersadmin $usersadmin)
    {
        request()->validate(Usersadmin::$rules);

        $usersadmin->update($request->all());

        return redirect()->route('usersadmins.index')
            ->with('success', 'Usuario editado correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $usersadmin = Usersadmin::find($id)->delete();

        return redirect()->route('usersadmins.index')
            ->with('success', 'Usuario eliminado correctamente');
    }
}
