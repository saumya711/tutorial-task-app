<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    public function index() {
        $employees = Employee::all();
        $employeesDetails = DB::table('employees')
            ->join('tasks', 'employees.task_id', '=', 'tasks.id')
            ->select('employees.name as employee_name', 'tasks.name as task_name')
            ->get();
        
        return view('employee.index', ['employees' => $employeesDetails]);
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
    
        Employee::create($validatedData);
    
        return redirect('/employees')->with('success', 'Task Update Successfully');
    }

    public function edit ($id)
    {
        $employee = Employee::findOrFail($id);
        $task = Task::all();
        return view('employee.edit', ['employee' => $employee, 'task' => $task]);
    }

}
