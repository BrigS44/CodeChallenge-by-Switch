<?php

namespace App\Http\Controllers;

use App\Team;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeamController extends Controller
{
    public function index()
    {

        $teams = Team::all();
        return view('team.index')->with('teams', $teams);
    }

    public function create()
    {
        $users = User::all();

        return view('team.create', ['users' => $users]);
    }

    public function store(Request $request)


    {
        $team = new Team();
        $team->fill($request->except(['teamleader_id']));
        $team->teamleader_id = Auth::user()->id;
        $team->save();

        return redirect('/')->with('success', 'Kolegij kreiran.');

    }


    public function show($id)
    {
        $teams = Team::find($id);


        //$this->authorize('show', $collegiums);



        return view('team.show',array('teams' => $teams));

    }

    public function edit($id)
    {
        $team = Team::find($id);
        $users = User::all();
        return view("team.edit", ['team' => $team], ['users' => $users]);
    }


    public function update(Request $request, $id)
    {
        $team = Team::find($id);
        $team->fill(array_filter($request->all(), 'strlen'));
        $team->save();

        return redirect('/')->with('warning', 'Ažurirano.');
    }

    public function destroy($id)
    {
        $team = Team::find($id);
        $team->delete();

        return redirect('/')->with('danger', 'Izbrisano.');
    }

    public function userCreate()
    {
        $users = User::all();

        return view('team.usercreate', ['users' => $users]);
    }

    public function userStore(Request $request)


    {
        $team = new Team();
        $team->fill($request->except(['teamleader_id']));
        $team->teamleader_id = Auth::user()->id;
        $team->save();

        return redirect('/')->with('success', 'Kreirano');

    }

    public function userEdit($id)
    {
        $team = Team::find($id);
        $users = User::all();
        return view("team.useredit", ['team' => $team], ['users' => $users]);
    }


    public function userUpdate(Request $request, $id)
    {
        $team = Team::find($id);
        $team->fill(array_filter($request->all(), 'strlen'));
        $team->save();

        return redirect('/')->with('warning', 'Ažurirano.');
    }


}
