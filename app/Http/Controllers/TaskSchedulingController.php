<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskSchedulingController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('welcome',["tasks"=>$tasks,"count"=>count($tasks)]);
        
    }
    public function addTask(Request $request)
    {
        $task = new Task();
        $task->name = $request['name'];
        $task->save();
        return redirect('user.dashboard');
    }

    public function deleteTask(Request $request)
    {
        Task::destroy($request['id']);
        return redirect('/');
    }
    public function endTask(Request $request)
    {
        $taskToEnd = Task::where('id',$request['id']);
        $taskToEnd->update([
            "status"=>1,
            "task_completed_at"=>now()
        ]);     
        return redirect()->route('user.dashboard')->with(["message"=>"sucess"]);
    }
}
