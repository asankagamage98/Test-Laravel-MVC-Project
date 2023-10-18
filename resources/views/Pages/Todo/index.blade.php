@extends('Layouts.app')
@section('content')


<div class="container ">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1  class="page-title"> Todo List page </h1>
        </div>

        <div class="col-lg-12 mt-5">
            <form action={{ route('toto.store') }} method="POST" enctype="multipart/form-data">   {{-- enctpe use for image upload --}}
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

           </form>


        </div>
    </div>
</div>


@endsection

@push('css')
    <style>
        .page-title{
            margin-top: 10vh;
            font-size:40px;
            color: blue
        }
    </style>
@endpush
