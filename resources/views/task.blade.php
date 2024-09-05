<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task</title>
</head>

<body>
    <div class="container">
        <h2>Add Task to Project</h2>

        <form action="{{route('task.store')}}" method="POST">
            @csrf

            <div class="form-group">
                <Select name="project_id">
                    @foreach ($project as $project)
                        <option value="{{ $project->id }}">{{ $project->title }}</option>
                    @endforeach
                </Select>
                <br>
                <label for="title">Task Title</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
    

            <button type="submit" class="btn btn-primary">Add Task</button>
        </form>
    </div>
</body>

</html>
