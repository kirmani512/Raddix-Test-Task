<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test Task</title>
</head>

<body>
    <div>
        <h2>Create Project</h2>
        <form action="{{route('project.store')}}" method="POST">
            @csrf
            <div class="form">
                <label>Project</label>
                <input type="text" name="title">
            </div>
            <div class="form">
                <label>Description</label>
                <textarea name="description" id=""></textarea>
            </div>
            <div class="form">
                <label>Assigned to</label>
                <select name="user_id">
                    @foreach ($user as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>

                    @endforeach
                </select>
            </div>
            <button type="submit">Add Project</button>

        </form>
    </div>
</body>

</html>
