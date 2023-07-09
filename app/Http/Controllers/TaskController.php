<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index () 
    {
        $tasks = Task::all();
        return view('task.index', compact('tasks'));
    }

    public function create () 
    {
        return view('task.create');
    }

    public function store (Request $request) 
    {
        $taskData = $request->validate([
            'category' => 'required',
            'name' => 'required',
            
        ]);

        Task::create($taskData);
        session()->flash('success', 'Data saved successfully.');
        return redirect('task-list');
    }

    public function edit ($id) {

        $task = Task::FindOrFail($id);
        // dd($task->name);
        return view('task.edit', compact('task'));
    }

    public function update (Request $request, $id) {
        $taskData = $request->validate([
            'category' => 'required',
            'name' => 'required',   
        ]);

        $task = Task::findOrFail($id);
        $task->update($taskData);

        return redirect('task-list')->with('success', 'Task Update Successfully');
    }

    public function delete ($id) {
        $task = Task::findOrFail($id);
        $task->delete();

        return redirect()->back();
    }

        
}
