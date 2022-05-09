@extends('template')
@section('title', 'Edit Users Data')

@section('konten')
@foreach($informations as $mhs)
<!doctype html>
<html lang="en">

<!-- file ini untuk mengubah data yang ada di halaman informations-->

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


    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="app.css" rel="stylesheet">
</head>

<body>
  <h3 style="color: white; background:linear-gradient(20deg, #1EAFED, #EEF2F5); padding: 37px 50px 18px 30px;"> Quality Rooms at Wallet-Friendly Prices</h3><br>

  <body background="https://wallpaperset.com/w/full/1/b/9/7685.jpg" ;>
    <div class="modal-dialog" role="document">
      <div class="modal-content rounded-5 shadow">
        <div class="modal-body p-5 pt-0">
          <main class="form-fill">
            <br>
            <h1 class="h3 mb-3 fw-normal text-center">Fill out the booking form</h1>
            <form action="/informations/update" method="post">
              @csrf

              <div class="form-floating">
                <input type="text" name="ID" class="form-control mb-2" id="ID" placeholder="ID" required="required" value="{{$mhs->ID}}">
                <label for="ID">ID</label>
              </div>
              <div class="form-floating">
                <input type="text" name="name" class="form-control mb-2" id="name" placeholder="Name" required="required" value="{{$mhs->name}}">
                <label for="name">Name</label>
              </div>
              <div class="form-floating">
                <select name="roomtype" class="form-control mb-2" id="roomtype" placeholder="Roomtype" required="required" value="{{$mhs->roomtype}}">
                  <option value="Standard room"> Standard room (Rp.89,000/Night) </option>
                  <option value="Superior room"> Superior room (Rp.119,000/Night) </option>
                  <option value="Deluxe room"> Deluxe room (Rp.149,000/Night)</option>
                  <option value="Suite room"> Suite room (Rp.199,000/Night)</option>
                </select>
                <label for="roomtype">Room type</label>
              </div>
              <div class="form-floating">
                <input type="date" , name="checkin" class="form-control mb-2" id="checkin" placeholder="checkin" required="required" value="{{$mhs->checkin}}">
                <label for="checkin">Check in</label>
              </div>
              <div class="form-floating">
                <input type="date" , name="checkout" class="form-control mb-3" id="checkout" placeholder="checkout" required="required" value="{{$mhs->checkout}}">
                <label for="checkout">Check out</label>
              </div>
              <button class="w-100 btn btn-lg btn-primary" type="submit">Order</button>
            </form>
          </main>
        </div>
      </div>
    </div>

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

  </body>
</body>

<style>
  img {
    display: block;
    margin-left: auto;
    margin-right: auto;
  }
</style>
<img src="https://www.homestay.com/assets/logo-homestay-36a9388d17da279b965e5b0dc5153eab12f98ceef3e29332a720df00b71fa2ac.svg" width="1000"></meta>

</html>
@endforeach
@endsection