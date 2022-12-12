<x-app>
    <div class="container w-50" style="margin-top: 7%;">
        <form 
          action="{{route('create.task')}}" 
          class="w-100 h-100 d-flex flex-column justify-content-around"
          method="POST"
        >
          @csrf
          <div class="mb-4">
            <h3>Create Task</h3>
          </div>
          <div class="mb-3">
            <input 
              type="text" 
              name="title" 
              placeholder="Title" 
              class="form-control" 
            />
          </div>
          <div class="mb-3">
            <textarea 
              name="description" 
              placeholder="Description" 
              class="form-control" 
              rows="5" 
              style="resize: none;" 
            ></textarea>
          </div>
          <button type="submit" class="btn btn-primary" style="width: 100%;">Create</button>
        </form>
    </div>
</x-app>