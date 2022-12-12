<x-app>
    <div class="container w-50" style="margin-top: 7%;">
        <form 
          action="{{route('update.task', ['task' => $task->id])}}" 
          class="w-100 h-100 d-flex flex-column justify-content-around"
          method="POST"
        >
            @method('PUT')
            @csrf
            <div class="mb-4">
                <h3>Update Task</h3>
            </div>
            <div class="mb-3">
                <input 
                type="text" 
                name="title" 
                placeholder="Title" 
                class="form-control" 
                value="{{$task->title}}"
                />
            </div>
            <div class="mb-3">
                <textarea 
                name="description" 
                placeholder="Description" 
                class="form-control" 
                rows="5" 
                style="resize: none;"
                >{{$task->description}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary" style="width: 100%;">Update</button>
        </form>
    </div>
</x-app>