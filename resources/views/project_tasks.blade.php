<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Task ID</th>
            <th>Title</th>
            <th>Project ID</th>
            <th>Status</th>
        </tr>

        @foreach($task as $task)
            <tr>
                <td>{{ $task->id }}</td>
                <td>{{ $task->title }}</td>
                <td>{{ $task->project_id }}</td>
                <td>{{ $task->status }}</td>
            </tr>
        @endforeach

    </table>
</body>
</html>
