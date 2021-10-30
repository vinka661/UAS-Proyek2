<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SistemUserController extends Controller
{
    public function index()
    {
        $sistemuser = User::all();
        return view('owner.sistemuser.index', ['sistemuser' => $sistemuser]);
    }

    public function create()
    {
        return view('owner.sistemuser.create');
    }

    public function store(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request['password']),
            'roles' => $request->roles,
        ]);
        return redirect('sistemUser');
    }

    public function edit($id)
    {
        $sistemuser = User::find($id);
        return view('owner.sistemuser.edit', ['sistemuser' => $sistemuser]);
    }

    public function update(Request $request, $id)
    {
        $sistemuser = User::find($id);
        $sistemuser->name = $request->name;
        $sistemuser->email = $request->email;
        $sistemuser->password = Hash::make($request->password);
        $sistemuser->roles = $request->roles;
        $sistemuser->save();
        return redirect('sistemUser');
    }

    public function destroy($id)
    {
        $sistemuser = User::find($id);
        $sistemuser->delete();
        return redirect('sistemUser');
    }
}
