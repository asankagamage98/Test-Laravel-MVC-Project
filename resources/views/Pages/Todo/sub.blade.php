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

            <div class="card">
                <div class="card-body">
                    <div class="card-header">
                        <h3>Create a new sub task </h3>
                    </div>

                    <form action={{ route('todo.sub.store') }} method="POST" enctype="multipart/form-data">   {{-- enctpe use for image upload --}}
                        @csrf

                       <div class="row pt-3" >
                           <div class="form-group col-lg-12">
                               <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label  class="form-label">Sub Title</label>
                                            <input type="text" class="form-control" name="sub_title"  placeholder="enter sub title">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label  class="form-label">Phone Number</label>
                                            <input type="number" class="form-control" name="phone"  placeholder="enter phone number">
                                        </div>
                                    </div>
                               </div>
                               <div class="row">
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label  class="form-label ">Select Priority</label>
                                        <select name="priority"  class="form-control" id="priority" >
                                            <option value="1">priority 1</option>
                                            <option value="2">priority 2</option>
                                            <option value="3">priority 3</option>
                                            <option value="4">priority 4</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label  class="form-label">Note</label>
                                        <textarea name="note" id="note" cols="30" rows="1" required='required' class="form-control" replaceholder="Enter note"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label  class="form-label">Date</label>
                                        <input type="date" class="form-control" name="date"  placeholder="">
                                    </div>
                                </div>
                           </div>
                               <button type="submit" class="btn btn-primary  mt-2 ">Submit</button>
                          </div>
                       </div>

                   </form>
                </div>
            </div>



                   <div class="col-lg-12 mt-3">
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
