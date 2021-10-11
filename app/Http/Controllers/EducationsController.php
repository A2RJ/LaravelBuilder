<?php

namespace App\Http\Controllers;

use App\Models\Educations;
use Illuminate\Http\Request;

class EducationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $educations = Educations::all();

        return view('educations.index', compact('educations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('educations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Educations::create($request->all());

        return back()->with('message', 'item stored successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Educations $educations
     * @return \Illuminate\Http\Response
     */
    public function show($educations)
    {
        $educations = Educations::find($educations);
        return view('educations.show', compact('educations'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Educations $educations
     * @return \Illuminate\Http\Response
     */
    public function edit($educations)
    {
        $educations = Educations::find($educations);
        return view('educations.edit', compact('educations'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\Educations $educations
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $educations)
    {
        Educations::find($educations)->update($request->all());

        return back()->with('message', 'item updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Educations $educations
     * @return \Illuminate\Http\Response
     */
    public function destroy($educations)
    {
        Educations::find($educations)->delete();

        return back()->with('message', 'item deleted successfully');
    }
}
