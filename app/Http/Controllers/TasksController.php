<?php

namespace App\Http\Controllers;

use App\Task;

class TasksController extends Controller
{
    public function index()
    {
    	$tasks = Task::all();

    	return view('tasks.index', compact('tasks'));
    }

    // public function show($id)
    // {
    // 	$task = Task::find($id);

    // 	return view('tasks.show', compact('task'));
    // }

    //some magic
    public function show(Task $task){ //automatically does Task::find(wildcard used in the route)
    	return view('tasks.show', compact('task'));
    }
}
