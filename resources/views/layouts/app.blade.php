<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <title>edforeco | @yield('title') </title>
    @yield('header')
</head>
<body>

@yield('content')
<div class="">
    @section('sidbar')
        this is side bar
    @endsection

    @yield('sidbar')
</div>

</body>
</html>