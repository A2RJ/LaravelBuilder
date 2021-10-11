<?php

namespace App\Http\Controllers;

use App\Models\Dedications;
use Illuminate\Http\Request;

class DedicationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dedications = Dedications::all();

        return view('dedications.index', compact('dedications'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dedications.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Dedications::create($request->all());

        return back()->with('message', 'item stored successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dedications $dedications
     * @return \Illuminate\Http\Response
     */
    public function show($dedications)
    {
        $dedications = Dedications::find($dedications);
        return view('dedications.show', compact('dedications'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dedications $dedications
     * @return \Illuminate\Http\Response
     */
    public function edit($dedications)
    {
        $dedications = Dedications::find($dedications);
        return view('dedications.edit', compact('dedications'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\Dedications $dedications
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $dedications)
    {
        Dedications::find($dedications)->update($request->all());

        return back()->with('message', 'item updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dedications $dedications
     * @return \Illuminate\Http\Response
     */
    public function destroy($dedications)
    {
        Dedications::find($dedications)->delete();

        return back()->with('message', 'item deleted successfully');
    }
}
