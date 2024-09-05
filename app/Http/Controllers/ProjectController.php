<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function home()
    {
        $user = User::all();
        return view('create_project', compact('user'));
    }
    public function store(Request $request)
    {
        $project = new Project();
        $project->title = $request->title;
        $project->description = $request->description;
        $project->user_id = $request->user_id;

        $project->save();

        return redirect()->back();
    }
}
