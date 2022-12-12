<div class="container w-50" style="margin-top: 7%;">
  <form 
    action="{{$action}}" 
    class="w-100 h-100 d-flex flex-column justify-content-around"
    method="POST"
  >
    @method($type == 'edit' ? 'PUT' : 'POST')
    @csrf
    <div class="mb-4">
      <h3>{{$type == 'create' ? 'Create Task' : 'Update Task'}}</h3>
    </div>
    <div class="mb-3">
      <input 
        type="text" 
        name="title" 
        placeholder="Title" 
        class="form-control" 
        value="{{$task ? $task->title : ''}}" 
      />
    </div>
    <div class="mb-3">
      <textarea 
        name="description" 
        placeholder="Description" 
        class="form-control" 
        rows="5" 
        style="resize: none;" 
        value="{{$task ? $task->description : ''}}"
      ></textarea>
    </div>
    <button type="submit" class="btn btn-primary" style="width: 100%;">
      {{$type == 'create' ? 'Create' : 'Update'}}
    </button>
  </form>
</div>