<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task List</title>
</head>
<body>

<div>

    <table border="1">
        <tr>
        <th>Title</th>
        <th>Project</th>
        <th>Status</th>
        <th>Action</th>
    </tr>
    @foreach ($tasks as $task)

<tr>

    <td>{{$task->title}}</td>
    <td>{{$task->project_id}}</td>
    <td>{{$task->status}}</td>

<td>
    <a class="btn btn-primary" href="{{route('task.inProfress',$task->id)}}">In Progress</a>

    <a class="btn btn-success" href="{{route('task.complete',$task->id)}}">Completed</a>
</td>
</tr>
@endforeach

    </table>

</div>
</body>
</html>
