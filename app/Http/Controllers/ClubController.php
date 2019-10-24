<?php

namespace App\Http\Controllers;

use App\Club;
use Illuminate\Http\Request;

class ClubController extends Controller
{
    protected $club;

    public function __construct(Club $club)
    {
        $this->middleware('auth');
        $this->club = $club;
    }

    public function showClubs()
    {
        $clubs = $this->club->all();
        return view('list', compact('clubs'));
    }

    public function formAdd()
    {
        return view('formAdd');
    }

    public function add(Request $request)
    {
        $this->club->create([
            "name" => $request->name,
            "coach" => $request->coach,
            "stadium" => $request->stadium,
        ]);
        return redirect()->route('clubs.list');
    }

    public function delete($id)
    {
        $clubs = $this->club->findOrFail($id);
        $clubs->delete();
        return redirect()->route('clubs.list');
    }

    public function edit($id)
    {
        $clubs = $this->club->findOrFail($id);
        return view('formEdit', compact('clubs'));

    }

    public function update(Request $request, $id)
    {
        $clubs = $this->club->findOrFail($id);
        $clubs->name = $request->name;
        $clubs->coach = $request->coach;
        $clubs->stadium = $request->stadium;
        $clubs->save();
        return redirect()->route('clubs.list');

    }
}
