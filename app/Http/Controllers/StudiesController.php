<?php

namespace App\Http\Controllers;

use App\Models\Studies;
use Illuminate\Http\Request;

class StudiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $studies = Studies::all();

        return view('studies.index', compact('studies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('studies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Studies::create($request->all());

        return back()->with('message', 'item stored successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Studies $studies
     * @return \Illuminate\Http\Response
     */
    public function show($studies)
    {
        $studies = Studies::find($studies);
        return view('studies.show', compact('studies'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Studies $studies
     * @return \Illuminate\Http\Response
     */
    public function edit($studies)
    {
        $studies = Studies::find($studies);
        return view('studies.edit', compact('studies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\Studies $studies
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $studies)
    {
        Studies::find($studies)->update($request->all());

        return back()->with('message', 'item updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Studies $studies
     * @return \Illuminate\Http\Response
     */
    public function destroy($studies)
    {
        Studies::find($studies)->delete();

        return back()->with('message', 'item deleted successfully');
    }
}
