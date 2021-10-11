<?php

namespace App\Http\Controllers;

use App\Models\Univs;
use Illuminate\Http\Request;

class UnivsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $univs = Univs::all();

        return view('univs.index', compact('univs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('univs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Univs::create($request->all());

        return back()->with('message', 'item stored successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Univs $univs
     * @return \Illuminate\Http\Response
     */
    public function show($univs)
    {
        $univs = Univs::find($univs);
        return view('univs.show', compact('univs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Univs $univs
     * @return \Illuminate\Http\Response
     */
    public function edit($univs)
    {
        $univs = Univs::find($univs);
        return view('univs.edit', compact('univs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\Univs $univs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $univs)
    {
        Univs::find($univs)->update($request->all());

        return back()->with('message', 'item updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Univs $univs
     * @return \Illuminate\Http\Response
     */
    public function destroy($univs)
    {
        Univs::find($univs)->delete();

        return back()->with('message', 'item deleted successfully');
    }
}
