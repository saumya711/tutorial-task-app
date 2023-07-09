<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Task;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index() {
        return view('employee.index');
    }

    public function create() {
        $tasks = Task::all();
        return view('employee.create', ['tasks' => $tasks]);
    }
 
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'task_id' => 'nullable|exists:tasks,id',
        ]);
    
        $employee = Employee::create($validatedData);
    
        return redirect('/employees')->with('success', 'Task Update Successfully');
    }

}
