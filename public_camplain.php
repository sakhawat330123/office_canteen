<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Home Page</title>   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body class="index_body">

<!-- header section start   -->
  <header id="home_bg">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
            <!-- Brand -->
            <a class="navbar-brand" href="assets/img/b3a4c58af11fd982867403e74fb9885b.jpg">
              <img src="assets/img/b3a4c58af11fd982867403e74fb9885b.jpg" alt="Canteen Logo"> Canteen
            </a>

            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
              <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
              <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                  <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Show Meal</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Menu Chart</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Bazar Cost</a>
                </li>
                <li class="nav-item clearfix">
                  <a class="nav-link" href="#">Complain</a>
                </li> 
              </ul>
              <ul class="navbar-nav">
                <li class="nav-item clearfix">
                  <a class="nav-link" href="#">Logout</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"><i class="fas fa-cog"></i></a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#">add profile picture</a>
                      <a class="dropdown-item" href="#">your food choice</a>
                      <a class="dropdown-item" href="#">Off your next meal</a>
                    </div>
                  </li>
              </ul>
            </div> 
          </nav>
        </div>
      </div>
    </div>
  </header>
<!-- header section start   -->

<!-- show your meal section strat -->
<section id="menu_chart_bg">
  <div class="container">
    <div class="row table_bg">
      <div class="col-md-8 offset-md-2">
        <br><br>
        <h4 class="text-center">Please give us your inportent comment</h4>
        <br>
        <form action="">
          <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">ID : </label>
            <div class="col-10">
              <input class="form-control" type="text" value="" id="example-text-input">
            </div>
          </div>
          <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">Name : </label>
            <div class="col-10">
              <input class="form-control" type="text" value="" id="example-text-input">
            </div>
          </div>
          <div class="form-group row">
            <label for="comment" class="col-2 col-form-label">Comment</label>
            <div class="col-10">
              <textarea class="form-control" rows="5" id="comment"></textarea>
            </div>
          </div>
          <div class="form-group row">
            <label for="comment" class="col-2 col-form-label"></label>
            <div class="col-10">
              <input type="submit" class="btn btn-info" value="SUBMIT">
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>
</section>
<!-- show your meal section end -->
<br><br><br><br><br>
<!-- footer section start -->
<footer id="footer_bg">
  <div class="container">
    <div class="row text-center">
      <div class="col-12">
        <p>&copy; sakhawat.4hossen@gmail.com</p>
      </div>
    </div>
  </div>
</footer>

<!-- footer section end -->




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script src="assets/js/vendor/fontawesome-all.min.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>