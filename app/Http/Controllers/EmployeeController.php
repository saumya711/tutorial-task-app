<?php

namespace App\Http\Controllers;

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
}
