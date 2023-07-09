<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Task List Page</title>

        <style>
            body {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                background-color: #f3f4f6;
            }
    
            .container {
                text-align: center;
                margin-bottom: 20px;
            }
    
            button {
                background-color: rgb(53, 82, 214);
                color: white;
                padding: 10px 20px;
                border: none;
                cursor: pointer;
                border-radius: 5px;
            }
    
            button.edit {
                background-color: rgb(59, 173, 59);
                color: white;
            }
    
            button.delete {
                background-color: rgb(205, 83, 83);
                color: white;
                padding: 10px 20px;
                border: none;
                cursor: pointer;
                border-radius: 5px;
            }
    
            table {
                width: 100%;
                border-collapse: collapse;
                margin-top: 3%;
            }
    
            th, td {
                padding: 10px;
                text-align: left;
                /* border-bottom: 1px solid #1a1919;
                border-right: 1px solid #1a1919;
                border-left: 1px solid #1a1919; */
                border: 1px solid #1a1919;
            }
    
            /* td:last-child {
                border-right: none;
            } */
    
            th {
                background-color: #f2f2f2;
            }
        </style>

        <!-- Fonts -->

        <!-- Styles -->
      
    </head>
    <body class="antialiased">
        <div class="container">
            <h1>Task List</h1>
            <button onclick="location.href='{{ route('task.create') }}'">Add Task</button>
            <table>
                <thead>
                    <tr>
                        <th>Task Name</th>
                        <th>Category Name</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($tasks as $task)
                    <tr>
                        <td>{{ $task->name }}</td>
                        <td>{{ $task->category }}</td>
                        <td>
                            <div style="display: flex; gap: 10px;">
                            <button onclick="location.href='{{ route('task-edit', $task->id) }}'">edit</button>
                            <form method="post" action="{{ route('task-delete', $task->id ) }}" onSubmit="return confirm('Are You sure want to delete this task?')">
                                @csrf
                                @method('DELETE')
                                <button class="delete" type="submit">delete</button>
                            </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>