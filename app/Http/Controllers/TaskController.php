<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function task()
    {
        $project = Project::all();
        $user = User::all();
        return view('task', compact('project', 'user'));
    }
    public function storeTask(Request $request)
    {
        $task = new Task();

        $task->project_id = $request->project_id;
        $task->title = $request->title;

        $task->save();

        return redirect()->back();
    }
    public function taskList()
    {
        $tasks = Task::all();
        return view('task_list', compact('tasks'));
    }
    public function inProgress($id)
    {
        $data = Task::find($id);
        $data->status = 'In Progress';
        $data->save();
        return redirect()->back();
    }
    public function deliver($id)
    {
        $data=Task::find($id);
        $data->status = 'Completed';

        $data->save();

        return redirect()->back();

    }
    public function mytasks($id)
    {


        $task = Task::where('project_id', $id)->get();

        return view('project_tasks', compact( 'task'));
    }
  
}
