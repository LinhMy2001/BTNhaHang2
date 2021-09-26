<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">


  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">

</head>

<body>
  <div class="row">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">......
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">                
                        <img src="images_food/logo.png" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse wrapper" id="navbarNav">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="indexad.php" style="color:#eb4d4b;">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"style="color:#eb4d4b;">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="food.php" style="color:#eb4d4b;">Food</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" style="color:#eb4d4b;">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

        </div>
  <section class="food-search text-center">
    <div class="container">
      <form action="">
        <input type="search" name="search" placeholder="Search for Food">
        <input type="submit" name="submit" value="Search" class="btn btn-primary">
      </form>
    </div>
  </section>
  <section class="categories">
    <div class="container">
      <h2 class="text-center">Explore Foods</h2>
      <a href="#">
        <div class="box-3 float-container">
          <img src="images_food/pizza.jpg" alt="Pizza" class="img-responsive img-curve">
          <h3 class="float-text text-while">Pizza</h3>
        </div>
      </a>
      <a href="#">
        <div class="box-3 float-container">
          <img src="images_food/burger.jpg" alt="Burger" class="img-responsive img-curve">
          <h3 class="float-text text-while">Burger</h3>
        </div>
      </a>
      <a href="#">
        <div class="box-3 float-container">
          <img src="images_food/momo.jpg" alt="Mono" class="img-responsive img-curve">
          <h3 class="float-text text-while">Momo</h3>
        </div>
      </a>
      <div class="clearfix"></div>
      <div>
        <a href="#">
          <div class="box-4 float-container">
            <img src="images_food/anh-moi.png" style="    height: 200px; width: 381px;" alt="Mono" class="img-responsive img-curve">
            <h3 class="float-text text-while">Momo</h3>
          </div>
        </a>
      </div>
    </div>
  </section>
  <!-- <section class="food-menu">
    <div class="container">
      <h2 class="text-center">Food Menu</h2>
      <div class="food-menu-box">
        <div class="food-menu-img">
          <img src="images_food/menu-pizza.jpg" alt="Chicken Hawain Pizza" class="img-responsive img-curve">
        </div>
        <div class="food-menu-desc">
          <h4>Food titel</h4>
          <p class="food-price">$2.3</p>
          <p class="food-detail">
            Made with Italian Sauce,chicken,and organice vegetanles.
          </p>
          <br>
          <a href="order.php" class="btn btn-primary">Oder Now</a>
        </div>
      </div>
      <div class="food-menu-box">
        <div class="food-menu-img">
          <img src="images_food/menu-burger.jpg" alt="Chicken Hawain Pizza" class="img-responsive img-curve">
        </div>
        <div class="food-menu-desc">
          <h4>Smoky Burger</h4>
          <p class="food-price">$2.3</p>
          <p class="food-detail">
            Made with Italian Sauce,chicken,and organice vegetanles.
          </p>
          <br>
          <a href="order.php" class="btn btn-primary">Oder Now</a>
        </div>
      </div>
      <div class="food-menu-box">
        <div class="food-menu-img">
          <img src="images_food/menu-burger.jpg" alt="Chicken Hawain Burger" class="img-responsive img-curve">
        </div>
        <div class="food-menu-desc">
          <h4>Nice Burger</h4>
          <p class="food-price">$2.3</p>
          <p class="food-detail">
            Made with Italian Sauce,chicken,and organice vegetanles.
          </p>
          <br>
          <a href="order.php" class="btn btn-primary">Oder Now</a>
        </div>
      </div>

      <div class="food-menu-box">
        <div class="food-menu-img">
          <img src="images_food/menu-pizza.jpg" alt="Chicken Hawain Pizza" class="img-responsive img-curve">
        </div>
        <div class="food-menu-desc">
          <h4>Food titel</h4>
          <p class="food-price">$2.3</p>
          <p class="food-detail">
            Made with Italian Sauce,chicken,and organice vegetanles.
          </p>
          <br>
          <a href="order.php" class="btn btn-primary">Oder Now</a>
        </div>
      </div>
      <div class="food-menu-box">
        <div class="food-menu-img">
          <img src="images_food/menu-pizza.jpg" alt="Chicken Hawain Pizza" class="img-responsive img-curve">
        </div>
        <div class="food-menu-desc">
          <h4>Food titel</h4>
          <p class="food-price">$2.3</p>
          <p class="food-detail">
            Made with Italian Sauce,chicken,and organice vegetanles.
          </p>
          <br>
          <a href="order.php" class="btn btn-primary">Oder Now</a>
        </div>
      </div>
      <div class="food-menu-box">
        <div class="food-menu-img">
          <img src="images_food/menu-momo.jpg" alt="Chicken Hawain Pizza" class="img-responsive img-curve">
        </div>
        <div class="food-menu-desc">
          <h4>Chicken Steam Momo</h4>
          <p class="food-price">$2.3</p>
          <p class="food-detail">
            Made with Italian Sauce,chicken,and organice vegetanles.
          </p>
          <br>
          <a href="order.php" class="btn btn-primary">Oder Now</a>
        </div>
      </div>

      <div class="clearfix"></div>
    </div>
  </section> -->
  <section class="social">
    <div class="container text-center">
      <ul>
        <li>
          <a href="#"><img src="https://img.icons8.com/color/48/000000/facebook.png" /></a>
        </li>
        <li>
          <a href="#"><img src="https://img.icons8.com/color/48/000000/instagram-new--v2.png" /></a>
        </li>
        <li>
          <a href="#"><img src="https://img.icons8.com/fluency/48/000000/twitter.png" /></a>
        </li>
      </ul>
    </div>
  </section>
  <section id="footer">
    <section class="footer text-center">
      <div class="container">
        <p>All rights reserved.Designed By <a href="#">Vijay thapa</a></p>
      </div>
    </section>
  </section>



</body>

</html>