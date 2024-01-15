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
                <br>

                @if ($task->isFinished)
                    Task Completed
                @else
                    Task Not Completed
                @endif
                <form action="{{ route('task.changeStatus', $task->id ) }}" method="post">
                    @csrf
                    @method('patch')
                    <button type="submit">Change Status</button>
                </form>
                <form action="{{ route('task.delete', $task->id) }}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit">Delete</button>
                </form>
                <hr>
            </div>
        @endforeach
    <div>
        <a href="{{ route('task.index') }}">
            <button type="button">Go to Add Task</button>
        </a>
    </div>
</body>


</html>
