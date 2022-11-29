<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;


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

    public function store(Request $request)
    {
        $group = new Group();
        $group->name = $request->name;
        $group->description = $request->description;
        $group->image = $request->image;
        $group->user_id = auth()->user()->id;
        $group->save();
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
