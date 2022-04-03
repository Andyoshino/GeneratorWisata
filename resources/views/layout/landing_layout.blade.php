<!DOCTYPE html>
<html lang="en">

<head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>{{ $title }}</title>

</head>

<body>

    @include('reusable_component.landing_navbar')

    <div class="container flex justify-evenly mx-auto px-36 mt-36">

        <div class="basis-3/5 pl-12">
            @yield('content')
        </div>

        <div class="basis-2/5">
            @include('reusable_component.landing_svg')
        </div>

    </div>

</body>

</html>
