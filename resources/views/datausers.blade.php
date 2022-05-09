@extends('template')
@section('title', 'User informations')

@section('konten')
<!doctype html>
<html lang="en">

<!-- file ini untuk menampil semua data yang ada di table informations-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Modals · Bootstrap v5.1</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/modals/">



    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        .rounded-5 {
            border-radius: .75rem;
        }

        .modal-dialog {
            max-width: 95%;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="app.css" rel="stylesheet">
</head>

<h3 style="color: white; background:linear-gradient(20deg, #1EAFED, #EEF2F5); padding: 37px 50px 18px 30px;"> User informations</h3>

<body background="https://wallpaperset.com/w/full/1/b/9/7685.jpg" ;>
    <main class="modal-dialog" role="document">
        <div class="modal-content rounded-5 shadow">
            <div class="modal-body p-5 pt-0">
                <table id="mytable" class="table table-bordred table-striped">
                    <thead>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Room type</th>
                        <th>Check in</th>
                        <th>Check out</th>
                    </thead>
                    <tbody>
                        @foreach($informations as $mhs)
                        <tr>
                            <td>{{$mhs->ID}}</td>
                            <td>{{$mhs->name}}</td>
                            <td>{{$mhs->roomtype}}</td>
                            <td>{{$mhs->checkin}}</td>
                            <td>{{$mhs->checkout}}</td>
                            <td>
                                <a href="/informations/edit/{{ $mhs->ID}}">Edit</a>
                                <!-- <a href="">Edit</a>&nbsp;&nbsp;&nbsp; -->
                                <a style="color:red;" href="/informations/hapus/{{ $mhs->ID}}">delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
@endsection