<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Employee</title>
    {{-- <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f4f6;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: white;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-bottom: 10px;
        }

        .button-container {
            display: flex;
            justify-content: center;
        }

        button[type="submit"] {
            background-color: green;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style> --}}
</head>
<body>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <form method="post">
        @csrf
        @method('PUT')
        <h1>Edit Employee</h1>
        <div>
            <label for="name">Employee Name:</label>
            <input type="text" name="name" id="name" value="{{ $employee->name }}">
        </div>
        <div>
            <label for="task">Assign Task:</label>
            <select name="task_id" id="task">
                @foreach ($tasks as $task)
                    <option value="{{ $task->id }}" {{ $task->id == $employee->task_id ? 'selected' : '' }}>{{ $task->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="button-container">
            <button type="submit">Update</button>
        </div>
    </form>
</body>
</html>
