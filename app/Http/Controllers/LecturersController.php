<?php

namespace App\Http\Controllers;

use App\Models\Lecturers;
use Illuminate\Http\Request;

class LecturersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lecturers = Lecturers::all();

        return view('lecturers.index', compact('lecturers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lecturers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Lecturers::create($request->all());

        return back()->with('message', 'item stored successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lecturers $lecturers
     * @return \Illuminate\Http\Response
     */
    public function show($lecturers)
    {
        $lecturers = Lecturers::find($lecturers);
        return view('lecturers.show', compact('lecturers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lecturers $lecturers
     * @return \Illuminate\Http\Response
     */
    public function edit($lecturers)
    {
        $lecturers = Lecturers::find($lecturers);
        return view('lecturers.edit', compact('lecturers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\Lecturers $lecturers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $lecturers)
    {
        Lecturers::find($lecturers)->update($request->all());

        return back()->with('message', 'item updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lecturers $lecturers
     * @return \Illuminate\Http\Response
     */
    public function destroy($lecturers)
    {
        Lecturers::find($lecturers)->delete();

        return back()->with('message', 'item deleted successfully');
    }
}
