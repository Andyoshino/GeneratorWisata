@extends('layout.dashboard_layout')

@section('table')
    <table class="table-fixed w-full">
        <thead>
            <tr>
                <th class="text-left w-1/3">Nama Tempat</th>
                <th class="text-left w-1/3">Berada di Kota</th>
                <th class="text-left w-1/3">Deskripsi</th>
            </tr>
        </thead>
        <tbody id="data">
        </tbody>
    </table>

    <script>
        $.ajax({
            type: 'GET',
            url: '/api/tempat-wisata',
            success: function(data) {

                let tempatWisata = data.data;

                for (let i = 0; i < tempatWisata.length; i++) {
                    $("#data").append(
                        '<tr>' +
                        '<td>' + tempatWisata[i].name + '</td>' +
                        '<td>' + tempatWisata[i].city + '</td>' +
                        '<td>' + tempatWisata[i].description + '</td>' +
                        '</tr>'
                    );
                }

            },
            error: function(data) {
                console.log(data.responseJSON);
            }
        });
    </script>
@endsection
