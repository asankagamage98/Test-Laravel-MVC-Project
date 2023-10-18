<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>todo</title>
</head>

@include('Libraries.style')

<body>
   @include('Components.navbar')
   @yield('content')


   @include('Libraries.script')
</body>
</html>
