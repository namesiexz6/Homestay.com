<!DOCTYPE html>
<html lang="en">

<!-- file ini untuk menapilkan navbar dan carousel slide setiap halaman -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/template.css">

    <title>@yield('title')</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-blue bg-light shadow">
    <div class="container-fluid">
        <a class="navbar-brand" href="/"><b>Homestay.com</b></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
               
                <li class="nav-item">
                    <a class="nav-link active" href="/tambahdata">Book a room</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/tampildata">informations</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" style="margin-left : 55vw">Mr.Hadafee Mudo 2008107010101</a>
                </li>
            </ul>
        </div>
    </div>
    </nav>
    <style>
    .carousel-item {
      height: 40rem;
      background: black;
      position: relative;
    }

    .container {
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      padding-bottom: 40px;
    }

    .overlay-image {
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      top: 0;
      background-position: center;
      background-size: cover;
      opacity: 0.97;
    }
  </style>

  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <ol class="carousel-indicators">
      <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
      <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
      <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
      <li data-bs-target="#myCarousel" data-bs-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active" style="color:white">
        <div class="overlay-image" style="background-image:url(https://cf.bstatic.com/xdata/images/hotel/max1280x900/215324037.jpg?k=a9880cefa7639699e0abcad132559dcf4cf43b0471a9327f19ae73470aab9012&o=&hp=1);opacity: 0.99;"></div>
        <div class="container">
          <h1><b>Standard Rooms</b></h1>
          <p>Standard rooms. There are necessary amenities such as bed, bathroom, TV, air conditioner.<br>
            Standard rooms size Will be the smallest if compared to other rooms but for those who want budget accommodation This room is considered the most economical room.
          </p>
        </div>
      </div>
      <div class="carousel-item" style="color:white">
        <div class="overlay-image" style="background-image:url(https://tigalimahomestay.com/uploads/rooms/Rooms_20200110212213.png); opacity: 0.5;"></div>
        <div class="container">
        <h1><b>Superior Rooms</b></h1>
          <p>Superior rooms. There are slightly larger than standard rooms. There are 1-2 additional amenities.
          </p>
        </div>
      </div>
      <div class="carousel-item" style="color:white">
        <div class="overlay-image" style="background-image:url(https://www.dolce-valley-forge-hotel.com/wp-content/uploads/2019/10/homestay-travel-bedroom.jpg); opacity: 0.5;"></div>
        <div class="container">
          <h1><b>Deluxe Rooms</b></h1>
          <p>Deluxe rooms will be a more luxurious room. There are beautiful decorations. large bed with complete facilities.
          </p>
        </div>
      </div>
      <div class="carousel-item" style="color:white">
        <div class="overlay-image" style="background-image:url(https://cdn1.npcdn.net/images/20190620_d3eaeb.jpg?md5id=efaaba7b6a9f5030033337074884b7e0&new_width=1200&new_height=1200&sub=1&w=1631633735); opacity: 0.5;"></div>
        <div class="container">
        <h1><b>Suite Rooms</b></h1>
          <p>Suites are unique rooms. There will be a living room as well. There is a clear proportion The furniture and facilities are more complete than other types of rooms, the area is wider. There are luxurious decorations. Therefore suitable for couples or families.
          </p>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
@yield('konten')
<br>

</html>