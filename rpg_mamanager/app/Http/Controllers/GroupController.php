<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Http\Requests\Group as GroupRequest;
use App\Http\Requests\UpdateGroup as UpdateGroupRequest;


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

    public function store(GroupRequest $request)
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
        return redirect()->route('groups');
    }

    public function show($id){
        $group = Group::find($id);
        return view('groups.show', ['group' => $group]);
    }

    // public function edit($id) with select personnage in group
       public function edit($id)
    {
        $group = Group::find($id);
        return view('groups.edit', ['group' => $group]);
    }

    // update with select personnage in group
        public function update(UpdateGroupRequest $request, $id)
    {
        $group = Group::find($id);
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
        return redirect()->route('groups');
    }
    

    // function delete group
    public function destroy(Group $group)
    {

        $group->delete();
        return redirect()->route('groups');
    }
}
