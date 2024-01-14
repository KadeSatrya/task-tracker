<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Task Tracker</title>
</head>

<body>
    <div>Home Page</div>
        @foreach($tasks as $task)
            <div>
                {{ $task->title }}
                <br>
                {{ $task->description }}
                <br>
                {{ $task->created_at }}
                <hr>
            </div>
        @endforeach
    <div>
        <a href="{{ route('addTaskIndex') }}">
            <button type="button">Go to Add Task</button>
        </a>
    </div>
</body>


</html>
