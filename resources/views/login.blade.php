@extends('layout.landing_layout')

@section('content')
    <div class="mt-16">
        <h1 class="font-bold text-8xl">
            login
        </h1>

        <div class="mt-16 border-b-2 w-fit py-3 flex gap-4">

            <div class="scale-75 w-fit">
                @include('reusable_component.username_svg')
            </div>

            <input id="username" type="text" placeholder="Username" class="input-box">

        </div>

        <div class="mt-8 border-b-2 w-fit py-3 flex gap-4">

            <div class="scale-75 w-fit">
                @include('reusable_component.password_svg')
            </div>

            <input id="password" type="password" placeholder="Password" class="input-box">
        </div>

        <button class="mt-6 text-2xl text-white bg-gradient-to-br from-indigo-400 to-teal-400 rounded-xl px-16 py-2">
            Login
        </button>



    </div>

    <script>
        $("button").click(function() {

            let request = {
                username: $("#username").val(),
                password: $("#password").val()
            }

            $.ajax({
                type: 'POST',
                url: '/login',
                data: request,
                success: function(data) {
                    location.href = '/dashboard';
                },
                error: function(data) {
                    console.log(data.responseJSON);
                }
            });

        });
    </script>
@endsection
