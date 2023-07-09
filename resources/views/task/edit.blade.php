<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update Task</title>
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
    <form method="post" action="{{ route('task-update', $task->id) }}">
        @csrf
        @method('PUT')
        <h1>Update Task</h1>
        <div>
            <label for="name">Task Name:</label>
            <input type="text" name="name" id="name" value="{{ $task->name }}">
        </div>
        <div>
            <label for="category">Task Category:</label>
            <input type="text" name="category" id="category" value="{{ $task->category }}">
        </div>
        <div class="button-container">
            <button type="submit">Update</button>
        </div>
    </form>
</body>
</html>