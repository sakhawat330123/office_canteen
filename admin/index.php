<?php 
  session_start();
  if (!isset($_SESSION['userid'])):
    header("Location: admin_login.php");
  endif;
 ?>

<?php 
  include "includes/connection.php";

  if (isset($_REQUEST['addMemberSub'])){
    $addMemberId = trim(mysqli_real_escape_string($con, $_REQUEST['addMemberId']));
    $addMemberName = trim(mysqli_real_escape_string($con, $_REQUEST['addMemberName']));
    $addMemberDes = trim(mysqli_real_escape_string($con, $_REQUEST['addMemberDes']));
    $addMemberAdvance = trim(mysqli_real_escape_string($con, $_REQUEST['addMemberAdvance']));

    $addMemberQuesry = "INSERT INTO `addmember`(`id`, `name`, `designation`, `advance`) VALUES ($addMemberId, '$addMemberName', '$addMemberDes', $addMemberAdvance)";
    $addMemberSent = $con->query($addMemberQuesry);

    if ($addMemberSent==true){
      echo "data insertet successfully";
    }else {
      die("Add Member Data Save Fail : ". connect_error);
    }
    

  }
 ?>

<?php 
  require "includes/header.php";

 ?>
<!-- Add new member start -->
<section id="menu_chart_bg">
  <div class="container">
    <div class="row table_bg">
      <div class="col-md-8 offset-md-2">
        <br><br>
       <!--  <h4 class="text-center"> echo $_SESSION['userid']; ?>
           if (isset($_SESSION['userid'])) {
            echo $_SESSION['userid'];
              }elseif (isset($_COOKIE['userid'])) {
                echo $_COOKIE['userid'];
              } ?>
        </h4> -->
        <h4 class="text-center">Add new canteen member</h4>
        <br>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
          <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">ID : </label>
            <div class="col-10">
              <input class="form-control" type="text" value="" name="addMemberId" id="example-text-input" placeholder="20160360" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">Name : </label>
            <div class="col-10">
              <input class="form-control" type="text" value="" name="addMemberName" id="example-text-input" placeholder="Mir Sakhawat Hossen" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">Designation : </label>
            <div class="col-10">
              <input class="form-control" type="text" value="" name="addMemberDes" id="example-text-input" placeholder="Officer" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">Advance : </label>
            <div class="col-10">
              <input class="form-control" type="text" value="" name="addMemberAdvance" id="example-text-input" placeholder="700" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="comment" class="col-2 col-form-label"></label>
            <div class="col-10">
              <input type="submit" class="btn btn-info" name="addMemberSub" value="SUBMIT">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<!-- Add new member end -->

<br>
<br>
<br>
<br>
<br>

<?php 
  require "includes/footer.php";
 ?>