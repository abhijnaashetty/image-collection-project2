<!DOCTYPE html>
<html >
<head>
    <title></title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet"  href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Abhi Technical</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="service.php">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contacts</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>


<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image1.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="image2.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="image3jpg.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<section class="my-5">
 
    <div>
        <h2 class="text-center">About Us</h2>
    </div>
  <div class="row">  
    <div class="col col-3">
      <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="image19.jpg" alt="India">
      </div>  
    </div>
    <div class="col col3">
      <h1 class="display-4">I am Abhijna A Shetty</h1>
      <p class="py-5"> Here are the images of different parts of the word.</p>
      <a href="about.php" class="btn btn-success">Ckeck More</a>
    </div>
  </div>  
               
</section>    

<section class="my-5">
    <div>
        <h2 class="text-center">Our Services</h2>
    </div>
    <div class="row">
    <div class="col col-3">
      <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="image4.jpg" alt="India">
                <div class="card-body">
                  <h5 class="card-title">Beautiful Idia</h5>
                  <p class="card-text">Some quick example.</p>
                  <a href="https://en.wikipedia.org/wiki/India" class="btn btn-primary">See Profile</a>
                </div>
      </div>
      
    </div>
    <div class="col col-3">
      <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="image5.jpg" alt="India">
                <div class="card-body">
                  <h5 class="card-title">Beautiful Karnataka</h5>
                  <p class="card-text">Some quick example.</p>
                  <a href="https://en.wikipedia.org/wiki/Karnataka" class="btn btn-primary">See Profile</a>
                </div>
      </div>
    </div>
    <div class="col col-3">
      <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="image9.jpg" alt="India">
                <div class="card-body">
                  <h5 class="card-title">Beautiful Manali</h5>
                  <p class="card-text">Some quick example.</p>
                  <a href="https://en.wikipedia.org/wiki/Manali,_Himachal_Pradesh" class="btn btn-primary">See Profile</a>
                </div>
      </div>
    </div>
    <div class="col col-3">
      <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="image16.jpg" alt="India">
                <div class="card-body">
                  <h5 class="card-title">Beautiful Goa</h5>
                  <p class="card-text">Some quick example.</p>
                  <a href="https://en.wikipedia.org/wiki/Goa" class="btn btn-primary">See Profile</a>
                </div>
      </div>
    </div>
    </div>
</section>

<section class="my-5"> 
    <div>
        <h2 class="text-center">Contact Us</h2>
    </div>
    

    <div class="w-50 m-auto">
      <form action="userinfo.php" methode="post">
        <div class="form-group">
          <label>UserName</label>
          <input type="text" name="user" autocomplete="off" class="form-control">
        </div>
        <div class="form-group">
          <label>Email Id</label>
          <input type="text" name="email" autocomplete="off" class="form-control">
        </div>
        <div class="form-group">
          <label>Mobile Number</label>
          <input type="text" name="mobile" autocomplete="off" class="form-control">
        </div>
        <div class="form-group">
          <label>Comment</label>
          <textarea class="form-control" name="comment">
          </textarea>  
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
 </section>  
 <footer>
  <p class="p-3 bg-dark text-white text-center">@abhitechnicalProduction</p>
</footer>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>