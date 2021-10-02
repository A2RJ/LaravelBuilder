<?php

namespace App\Http\Controllers;

use App\Models\Management;
use Illuminate\Http\Request;

class ManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $management = Management::latest()->paginate(5);

        return view('management.index', compact('management'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('management.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $this->validate($request, [
            "m_name" => "required|max:100",
            "m_image" => "required|max:100",
        ]);

        Management::create($validated);

        return back()->with('message', 'item stored successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Management $management
     * @return \Illuminate\Http\Response
     */
    public function show(Management $management)
    {
        return view('management.show', compact('management'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Management $management
     * @return \Illuminate\Http\Response
     */
    public function edit(Management $management)
    {
        return view('management.edit', compact('management'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\Management $management
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Management $management)
    {
        $validated = $this->validate($request, [
            "m_name" => "required|max:100",
            "m_image" => "required|max:100",
        ]);

        $management->update($validated);

        return back()->with('message', 'item updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Management $management
     * @return \Illuminate\Http\Response
     */
    public function destroy(Management $management)
    {
        $management->delete();

        return back()->with('message', 'item deleted successfully');
    }
}
