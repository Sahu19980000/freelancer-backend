<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;

class ClientUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientuser = User::all()->where('joinas', 'Client');
        return view('admin.client_user.index', compact('clientuser'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.client_user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        //dd($request->all());

        $clientuser = new User();
        $clientuser->name = $request->client_name;
        $clientuser->email = $request->client_email;
        $clientuser->joinas = $request->joinas;
        $clientuser->country = $request->country;
        // $clientuser->password = $request->password;
        $clientuser->password = password_hash($request->password, PASSWORD_BCRYPT);
        $clientuser->save();
        return redirect()->route('clientusers.index')->with('success', 'Data Has Been Created');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $clientuser = User::find($id);
        return view('admin.client_user.edit', compact('clientuser'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $clientuser = User::find($id);
        $clientuser->name = $request->client_name;
        $clientuser->email = $request->client_email;
        $clientuser->joinas = $request->joinas;
        $clientuser->country = $request->country;
        // $clientuser->password = $request->password;
        $clientuser->password = password_hash($request->password, PASSWORD_BCRYPT);
        $clientuser->save();
        return Redirect::back()->with('success', 'Data Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $clientuser = User::find($id);
        $clientuser->delete();
        return Redirect::back()->with('success', 'Data Updated successfully!');
    }
}
