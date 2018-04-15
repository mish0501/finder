<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Group;
use Illuminate\Support\Facades\Auth;

class GroupController extends Controller
{
  public function search(Request $request)
  {
    $search = $request->get('s');

    $groups = Group::where('name', 'like', $search . '%')->get();

    return view('home', ['groups' => $groups, 'search' => $search]);
  }

  public function create()
  {
      return view('group.create');
  }

  public function store(Request $request)
  {

    $user = Auth::user();

    $validatedData = $request->validate([
        'name' => 'required',
        'info' => 'required',
        'conditions' => 'required',
    ]);

    $data = $request->all();

    $data['owner'] = $user->id;

    Group::create($data);

    return redirect('/home');
  }

  public function join(Request $request)
  {
    $user = $request->user();
    $group_id = $request->get('id');

    $user->groups()->syncWithoutDetaching([$group_id]);

    return redirect()->route('groups.show', ['id' => $group_id]);
  }

  public function show($id)
  {
    $group = Group::find($id);

    return view('group.show', ['group' => $group]);
  }
}
