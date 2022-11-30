<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Http\Requests\Group as GroupRequest;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function index()
    {
        $groups = Group::where('user_id', auth()->user()->id)->get();
        return view('groups.index', ['groups' => $groups]);
    }
 
    public function create()
    {
        return view('groups.create');
    }

    public function store(GroupRequest $group, Request $request)
    {
        $group = new Group();
        $group->name = $request->name;
        $group->description = $request->description;
        $group->image = $request->image;
        $group->user_id = auth()->user()->id;
        $group->personnage_id = $request->personnage_id;
        $group->personnage_id1 = $request->personnage_id1;
        $group->personnage_id2 = $request->personnage_id2;
        $group->personnage_id3 = $request->personnage_id3;
        $group->personnage_id4 = $request->personnage_id4;
        $group->personnage_id5 = $request->personnage_id5;
        $group->save();
        dd($group);
        return redirect()->route('groups');
    }

    public function show($id){
        $group = Group::find($id);
        return view('groups.show', ['group' => $group]);
    }


    // function delete group
    public function destroy(Group $group)
    {

        $group->delete();
        return redirect()->route('groups');
    }
}
