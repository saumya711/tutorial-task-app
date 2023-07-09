<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Task App</title>

    <style>
        /* Styles for the navigation bar */
        nav {
            background-color: #f2f2f2;
            padding: 10px;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        nav ul li {
            margin-right: 10px;
        }

        nav ul li a {
            text-decoration: none;
            color: #000;
            padding: 5px;
            border-radius: 3px;
        }

        nav ul li a:hover {
            background-color: #ddd;
        }

        /* Other styles */

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
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 3%;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #1a1919;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>

    <!-- Styles -->

</head>
<body class="antialiased">
    <nav>
        <ul>
            <li><a href="{{ route('task-index') }}">Task List</a></li>
            <li><a href="{{ route('employee-index') }}">Employee List</a></li>
        </ul>
    </nav>

</body>
</html>
