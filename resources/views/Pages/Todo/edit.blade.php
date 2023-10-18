


<form action={{ route('todo.update',$tasks->id ) }} method="POST" enctype="multipart/form-data">   {{-- enctpe use for image upload --}}
    @csrf

   <div class="row">
       <div class="form-group col-lg-12">
           <div class="mb-3">
               <label  class="form-label">Todo name</label>
               <input type="text" class="form-control" name="name" value="{{ $tasks->name }}" required placeholder="enter name">
           </div>
           <div class="mb-3">
               <label  class="form-label">Todo price</label>
               <input type="text" class="form-control" name="price" value="{{ $tasks->price }}" required  placeholder="enter price">
           </div>


           <button type="submit" class="btn btn-primary">Update</button>

      </div>
   </div>

</form>
