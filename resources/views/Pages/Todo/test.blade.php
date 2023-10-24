
{{-- @extends('Layouts.app')
@section('content') --}}
    <form action={{ route('test') }} method="post" enctype="multipart/form-data" >
        @csrf
        <label for="">name</label>
        <input type="text" name='name' placeholder="input name">
        <label for="">address</label>
        <input type="text" name='address' placeholder="input address">
        <input type="submit" value="Submit">
   </form>


   <div>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>name</th>
                <th>address</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tests as $key=>$test)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>{{ $test->name }}</td>
                    <td>{{ $test->address }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
   </div>

</div>

{{-- @endsection --}}
