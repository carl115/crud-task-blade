<table class="table table-bordered">
    <thead>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tasks as $task)
            <tr>
                <td>{{$task->title}}</td>
                <td>{{$task->description}}</td>
                <td>
                    <div class="d-flex align-items-center justify-content-center">
                        <a href="{{route('update', ['task' => $task])}}" class="btn btn-secondary">Edit</a>
                        <form action="{{route('delete.task', ['task' => $task->id])}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>