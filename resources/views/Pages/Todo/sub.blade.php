@extends('Layouts.app')
@section('content')


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<div class="container ">
    <div class="row">
        <div class="col-lg-12 text-center mb-5">
            <h1  class="page-title"> Sub Class Page </h1>
            <h5 class="page-name ">Welcome {{ $tasks->name }}</h5>

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

                                </tbody>
                              </table>
                        </div>



                    </div>
       </div>
    </div>
</div>


{{-- modal use for update --}}



@endsection


{{-- ---------------------------------------------------------- --}}
@push('js')
<script>

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

        .page-name{
            font-size: 45px;
            color: rgb(167, 16, 41);
            position: absolute;
            justify-content: right;


        }
    </style>
@endpush
