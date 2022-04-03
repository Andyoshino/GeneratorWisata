<!DOCTYPE html>
<html lang="en">

<head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title> Dashboard {{ $title }}</title>

</head>

<body>

    @include('reusable_component.dashboard_navbar')

    <div class="mt-12 flex">

        <div class="p-8 w-[326px]">

            <form action="/dashboard">
                <div class="mb-6">
                    <button type="submit" class="@if ($title == 'Akun User') {{ 'font-bold' }} @endif">
                        Akun user
                    </button>
                </div>
            </form>

            <div class="mb-6 @if ($title == 'Review') {{ 'font-bold' }} @endif">
                Review
            </div>

            <form action="/dashboard?type=tempat_wisata">
                <div class="mb-6">
                    <button type="submit" class="@if ($title == 'Tempat Wisata') {{ 'font-bold' }} @endif">
                        Tempat wisata
                    </button>
                </div>
            </form>

        </div>

        <div class="px-8 py-4 w-full pr-64">
            <div class="flex w-full">

                <div class="text-4xl font-semibold basis-1/2">
                    Data {{ $title }}
                </div>

                <div class="basis-1/2 flex justify-end">
                    <div class="border-b-2 w-fit flex gap-4">

                        <input id="username" type="text"
                            @if ($title == 'Tempat Wisata') placeholder="Cari tempat wisata" @endif
                            @if ($title == 'Akun User') placeholder="Cari user" @endif
                            @if ($title == 'Review') placeholder="Cari review" @endif class="input-box">

                        <div class="scale-75 w-fit">
                            @include('reusable_component.search_svg')
                        </div>

                    </div>
                </div>

            </div>


            <div class="mt-12">
                @yield('table')
            </div>

        </div>

    </div>

</body>

</html>
