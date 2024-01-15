<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add task</title>
</head>

<body>
    <div>This is for adding Task</div>
    <div>
        <form action="{{ route('task.post') }}" method="post">
            @csrf
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" required>

            <br>

            <label for="description">Description:</label>
            <textarea id="description" name="description" rows="4" required></textarea>

            <br>

            <button type="submit">Submit</button>
        </form>
    </div>
</body>


</html>
