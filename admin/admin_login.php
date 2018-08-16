<?php
  session_start();
  if (isset($_SESSION['userid'])) {
     header("Location: index.php");
   }


  include "includes/connection.php";
  include "includes/function.php";

  $iderror = $passerror = "";
  $admin_id = $admin_pass = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["loginadmin"])) {
      $iderror = "Email is required";
    }else{
      $admin_id = safe_input($_POST["loginadmin"]);
    }

    if (empty($_POST["loginAdminPass"])) {
      $passerror = "Email is required";
    }else{
      $admin_pass = safe_input($_POST["loginAdminPass"]);
    }
    
    

    $admin_check = "SELECT * FROM `admin` WHERE `admin_id` = $admin_id && `admin_password` = $admin_pass";
    $admin = $con->query($admin_check);

    $admin_rows = $admin->num_rows;

    if ($admin_rows == 1) {
      $_SESSION['userid']=$admin_id;
      header("Location: index.php");
    }else{
      header("Location: admin_login.php");
    }
  }
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login || Admin</title>   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body id="login_body">
  
  <section id="login_bg">
    <div class="container">
      <div class="row text-center">
        <div class="col-md-4 offset-md-4">
          <br><br><br><br><br><br><br>
          <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <div class="form-group">
              <label for="loginadmin">admin login</label>
              <input type="text" class="form-control" name="loginadmin" id="loginadmin" placeholder="" ><span> <?php echo $iderror; ?></span> <br>
              <input type="password" class="form-control" name="loginAdminPass" id="loginAdminPass" placeholder="" ><span class="text-danger"> <?php echo $passerror; ?></span><br>
              <label class="form-check-label">
                <input class="form-check-input" name="rememberMe" type="checkbox"> Remember me
              </label>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary" name="adminLoginBtn">SUBMIT</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script src="assets/js/vendor/fontawesome-all.min.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>