<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $users = User::orderBy('name', 'asc')->get();
        return view('user.index', ['users' => $users]);
    }


    public function create()
    {
        return view('user.create');
    }


    public function store(Request $request)
    {
        $user = new User();
        $user->fill($request->all());
        $user->save();

        return redirect('/users')->with('success', 'Korisnik kreiran.');
    }

    public function show($id)
    {
        $users = User::find($id);
        return view('user.show', ['users' => $users]);
    }


    public function edit($id)
    {
        $users = User::find($id);

        return view('user.edit', array('users' =>$users));
    }


    public function update(Request $request, $id)
    {
        $users = User::find($id); //find faculty with id
        $users->fill($request->all());
        $users->save();

        return redirect('home')->with('warning', 'Ažurirano.');
    }


    public function destroy($id)
    {
        $users = User::find($id);

        $users->delete();

        return redirect('/users')->with('danger', 'Izbrisano.');
    }
}
