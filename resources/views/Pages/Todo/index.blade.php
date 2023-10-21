@extends('Layouts.app')
@section('content')


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<div class="container ">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1  class="page-title"> Todo List page </h1>
        </div>

        <div class="col-lg-12 mt-5">
            <form action={{ route('todo.store') }} method="POST" enctype="multipart/form-data">   {{-- enctpe use for image upload --}}
                 @csrf

                <div class="row">
                    <div class="form-group col-lg-12">
                        <div class="mb-3">
                            <label  class="form-label">Todo name</label>
                            <input type="text" class="form-control" name="name"  placeholder="enter name">
                        </div>
                        <div class="mb-3">
                            <label  class="form-label">Todo price</label>
                            <input type="text" class="form-control" name="price"  placeholder="enter price">
                        </div>


                        <button type="submit" class="btn btn-primary">Submit</button>

                   </div>
                </div>

            </form>


                   <div class="col-lg-12">
                        <div>
                            <table class="table table-striped">
                                <thead>
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">name</th>
                                    <th scope="col">price</th>
                                    <th scope="col">done</th>
                                    <th scope="col">Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  @foreach ($tasks as $key => $task)
                                        <tr>
                                            <th scope="row">{{ $key + 1 }}</th>
                                            <td>{{ $task->name }}</td>
                                            <td>{{ $task->price }}</td>
                                            <td>
                                                @if ($task->done == 0)
                                                    <span class="adge text-bg-danger">InCompleted</span>
                                                @else
                                                <span class="badge text-bg-success">Completed</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('todo.delete',$task->id) }}" ><i class="fa-solid fa-trash-can" style="color: #e01010;"></i></a>
                                                <a href=""><i class="fa-sharp fa-solid fa-circle-check" style="color: #10d541;"></i></a>
                                                <a href="javascript:void(0)"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#editTodo"
                                                        onclick="todoModal({{ $task->id }})">
                                                        <i class="fa-solid fa-pen-to-square" style="color: #020203;"></i>
                                               </a>



                                            </td>

                                        </tr>
                                  @endforeach
                                </tbody>
                              </table>
                        </div>



                    </div>
       </div>
    </div>
</div>


{{-- modal use for update --}}

<!-- Modal -->
<div class="modal fade" id="editTodo" tabindex="-1" aria-labelledby="editTodoLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="editTodoLabel">Update Todo..</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" id="todoEditContent">

        </div>
      </div>
    </div>
  </div>



@endsection


{{-- ---------------------------------------------------------- --}}
@push('js')
<script>
    function todoModal(id){
        var data = {
            'id': id,
        };
        $.ajax({
            url: "{{ route('todo.getUpdate') }}",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'GET',
            dataType: 'html',
            data: data,
            success: function(response){
                console.log(response);
                $('#editTodo').modal('show');
                $('#todoEditContent').html(response);
            },
            error: function(error) {
                console.error(error);
            }
        });
    }
</script>
@endpush

{{-- --------------------------------------------------------- --}}

@push('css')
    <style>
        .page-title{
            margin-top: 10vh;
            font-size:40px;
            color: blue
        }
    </style>
@endpush
