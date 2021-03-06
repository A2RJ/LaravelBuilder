<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = Users::all();

        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Users::create($request->all());

        return back()->with('message', 'item stored successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Users $users
     * @return \Illuminate\Http\Response
     */
    public function show($users)
    {
        $users = Users::find($users);
        return view('users.show', compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Users $users
     * @return \Illuminate\Http\Response
     */
    public function edit($users)
    {
        $users = Users::find($users);
        return view('users.edit', compact('users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\Users $users
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $users)
    {
        Users::find($users)->update($request->all());

        return back()->with('message', 'item updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Users $users
     * @return \Illuminate\Http\Response
     */
    public function destroy($users)
    {
        Users::find($users)->delete();

        return back()->with('message', 'item deleted successfully');
    }
}
