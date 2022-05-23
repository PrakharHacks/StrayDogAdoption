<!DOCTYPE html>
<html lang="en">

<head>
  <title>Kuttey!!</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css\style.css" type="text/css">
</head>

<body style="background-color: #E3E2DF;">
  <audio id="audio_play">
    <source src="bark_audio.mp3" type="audio/mp3">
  </audio>

  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <!-- Brand -->
    <a class="navbar-brand" href="index.php">
      <img src="images\download.jpg" width="45" alt="" class="d-inline-block align-middle mr-2" onclick="document.getElementById('audio_play').play(); return false;" onmouseover="this.width=150;" onmouseout="this.width=50;">
      <!-- Logo Text -->
      <span class="text-uppercase font-weight-bold">Kuttey!</span>
    </a>

    <!-- Links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="#Section1">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#Section2">Our Team</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="giveaway.php" target="_blank">Giveaway</a>
      </li>


    </ul>
  </nav>


  <div id="demo" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images\Dogs_Puppy.png" alt="Los Angeles">
      </div>
      <div class="carousel-item">
        <img src="images\Stray-dog.png" alt="Chicago">
      </div>
      <div class="carousel-item">
        <img src="images\01-stray-dogs-nationalgeographic_1927666.png" alt="New York">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>

  </div>
  <hr>
  <section class="my-5">
    <div class="main" id="Section1">
      <h2 class="text-center">About Us</h2>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-12 my-5">
          <img src="images\download.jpg" alt="Kuttey !" class="img-fluid">
        </div>
        <div class="col-lg-6 col-md-6 col-12 my-3">
          <h3 class="display-4  ">We are the Kuttey Animal Support Agency</h3>
          <h4 class="py-3">We have really become super active in rescuing animals, and it has made our life feel so much better. We can’t even express to you how happy it has made us.Our dogs are all rescued from the streets, shelters and dangerous circumstances. We pay for all their medical care, food and shelter needs before we adopt them out to the best homes possible. Because of our love of dogs and the many dangers of living on the streets as a dog, Stray Dog Adoption was created.</h4>
          <a href="about.php" class="btn btn-danger" target="_blank">click here to learn more</a>
        </div>
      </div>
    </div>
  </section>
  <hr>
  <section class="my-5">
    <div>
      <h2 class="text-center">Our Team</h2>
    </div>
    <div class="container-fluid" id="Section2">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
          <div class="card" style="width:400px">
            <img class="card-img-top" src="Team\Prakhar.png" alt="Card image" style="width:100%">
            <div class="card-body">
              <h4 class="card-title">Prakhar Martand</h4>
              <p class="card-text"> Adopting Stray Dogs is one of the best experiences anyone can have. You adopt a dog, then you will enjoy the love of it. As we know that Dog's love for their master is unmatchable in this world. So you must able to give them good food and shelter along with any other sorts of care need by them.Help us in the mission by being part of it, I motivate you</p>
              <a href="#" class="btn btn-success">See Profile</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <div class="card" style="width:400px">
            <img class="card-img-top" src="Team\Chaitanya.png" alt="Card image" style="width:100%">
            <div class="card-body">
              <h4 class="card-title">Chaitanya </h4>
              <p class="card-text">This a great cause to join and totally soul filling.I myself love caring dogs and truly its a role I love. "Lovingly helping the unwanted, abused and abandoned dogs of Southeast Texas for over 20 years."Stray dogs are an extraordinary group of living creatures who choose to live as wanderers of the street. It is nothing short of admirable. </p>
              <a href="#" class="btn btn-success">See Profile</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <div class="card" style="width:400px">
            <img class="card-img-top" src="images\R.jpg" alt="Card image" style="width:100%">
            <div class="card-body">
              <h4 class="card-title">Snofie</h4>
              <p class="card-text">Hello my name is Snofie, and I am soo sick of these people asking for money to adopt me.  I don't even care I'm trying to sleep here and you guys sound like a bunch of telemarketers.  How about instead of asking for money for me, you help someone else like me who gets stuck in shelters? Would not that be great for all my kinds :-)</p>
              <a href="#" class="btn btn-success">See Profile</a>
            </div>
          </div>
        </div>

      </div>
    </div>

  </section>
  <hr>
  <section class="my-5">
    <div>
      <h2 class="text-center my-3 pd-3 py-3">Gallery</h2>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-12 img-thumbnail">
          <img src="Gallery\download.jpg" alt="pic1" class="img-fluid mx-auto d-block py-3">
        </div>
        <div class="col-lg-4 col-md-4 col-12 img-thumbnail">
          <img src="Gallery\download (1).jpg" alt="pic2" class="img-fluid mx-auto d-block py-3">
        </div>
        <div class="col-lg-4 col-md-4 col-12 img-thumbnail">
          <img src="Gallery\download (2).jpg" alt="pic3" class="img-fluid mx-auto d-block py-3">
        </div>
        <div class="col-lg-4 col-md-4 col-12 img-thumbnail">
          <img src="Gallery\download (3).jpg" alt="pic4" class="img-fluid mx-auto d-block py-3">
        </div>
        <div class="col-lg-4 col-md-4 col-12 img-thumbnail">
          <img src="Gallery\download (4).jpg" alt="pic5" class="img-fluid mx-auto d-block py-3">
        </div>
        <div class="col-lg-4 col-md-4 col-12 img-thumbnail">
          <img src="Gallery\download (5).jpg" alt="pic6" class="img-fluid mx-auto d-block py-3">
        </div>
      </div>
      <div class="gal">
        <h2 class="galve" style="text-align: center; font-family: cursive;">Some of our collections !</h2>
      </div>
    </div>



  </section>
  <hr>
  <section class="my-5">
    <div>
      <h2 class="text-center">Have good pics of Dog ? Upload it to us we would love to add it in our gallery </h2>
    </div>
    <div class="w-50 m-auto">

      <form action="uploads.php" method="post" enctype="multipart/form-data">
        <div class="text-center">
          <label for="filepic" class="text text-danger">Upload your picture here :</label>
          <input type="file" name="file" id="file">
        </div>
        <div class="text-center">
          <button type="submit" name="submit1" class="btn btn-success my-3">Submit</button>

        </div>


      </form>

    </div>
  </section>
  <hr>
  <section class="my-5">
    <div>
      <h2 class="text-center">Contact for Adoption</h2>
    </div>
    <div class="w-50 m-auto">
      <form action="userinfo.php" method="post">
        <div class="form-group">
          <label class="">Username</label>
          <input type="text" name="user" id="user" class="form-control" autocomplete="off" placeholder="Your full name" required>
        </div>
        <div class="form-group">
          <label class="">Email</label>
          <input type="text" name="email" id="email" class="form-control" autocomplete="off" placeholder="Your email address" required>
        </div>
        <div class="form-group">
          <label class="">Mobile No</label>
          <input type="text" name="mobile" id="mobile" class="form-control" autocomplete="off" placeholder="Your Mobile number" required>
        </div>
        <div class="form-group">
          <label for="comment">Describe your taste</label>
          <textarea class="form-control" rows="5" id="comment" placeholder="write here" name="comment"></textarea>
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-success">Submit</button>

        </div>
      </form>
    </div>
  </section>

  <section>
    <div class="footer">
      <footer>
        <h5 class="p-3 my-0 pd-3 bg-dark text-white text-center">@Kuttey!<br>Contact us at : kuttey@gmail.com</h5>

      </footer>
    </div>
  </section>




  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>