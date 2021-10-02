<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::latest()->paginate(5);

        return view('users.index', compact('users'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function coba()
    {
        return "coba";
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
        $validated = $this->validate($request, [
            "name" => "required|max:100",
            "email" => "required|max:100",
            "ttl" => "required|max:100|nullable",
            "gender" => "required|max:100|nullable",
            "alamat" => "required|max:100|nullable",
            "kel" => "required|max:100|nullable",
            "kec" => "required|max:100|nullable",
            "kab" => "required|max:100|nullable",
            "prov" => "required|max:100|nullable",
            "phone" => "required|max:15|nullable",
            "password" => "required",
            "user_image" => "required"
        ]);

        User::create($validated);

        return back()->with('message', 'item stored successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $validated = $this->validate($request, [
            "name" => "required|max:100",
            "email" => "required|max:100",
            "ttl" => "required|max:100|nullable",
            "gender" => "required|max:100|nullable",
            "alamat" => "required|max:100|nullable",
            "kel" => "required|max:100|nullable",
            "kec" => "required|max:100|nullable",
            "kab" => "required|max:100|nullable",
            "prov" => "required|max:100|nullable",
            "phone" => "required|max:15|nullable",
            "password" => "required",
            "user_image" => "required"
        ]);

        $user->update($validated);

        return back()->with('message', 'item updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        return back()->with('message', 'item deleted successfully');
    }
}
