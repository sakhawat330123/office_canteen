<?php
  require "includes/header.php";
  

 ?>

<!-- show your meal section strat -->
<section id="show_meal_bg">
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-12 col-md-auto">
        <br><br>
        <form class="form-inline">
          <div class="form-group">
            <label for="logInOfficeID">date : </label>
            <input type="date" class="form-control" name="logInOfficeID" id="logInOfficeID">
          </div>
          <div class="form-group">
            <input type="submit" class="btn btn-primary" name="" value="Check Meal">
          </div>
        </form>
      </div>
    </div>
    <div class="row table_bg">
      <div class="col-md-12">
        <div class="table-responsive">
            <table class="table table-sm table-hover table-bordered">
              <thead>
                <tr class="bg-info text-white text-center">
                  <th>Id</th>
                  <th>Name</th>
                  <th>Designation</th>
                  <th>Sl No</th>
                  <th>Taken meal</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>20160360</td>
                  <td>Mir Sakhawat Hossen</td>
                  <td>Designation</td>
                  <td>1</td>
                  <td>&nbsp;&nbsp; Present &nbsp;<input type="checkbox" name="" id=""></td>
                </tr>
                <tr>
                  <td>20160360</td>
                  <td>Mir Sakhawat Hossen</td>
                  <td>Designation</td>
                  <td>1</td>
                  <td>&nbsp;&nbsp; Present &nbsp;<input type="checkbox" name="" id=""></td>
                </tr>
                <tr>
                  <td>20160360</td>
                  <td>Mir Sakhawat Hossen</td>
                  <td>Designation</td>
                  <td>1</td>
                  <td>&nbsp;&nbsp; Present &nbsp;<input type="checkbox" name="" id=""></td>
                </tr>
                <tr>
                  <td>20160360</td>
                  <td>Mir Sakhawat Hossen</td>
                  <td>Designation</td>
                  <td>1</td>
                  <td>&nbsp;&nbsp; Present &nbsp;<input type="checkbox" name="" id=""></td>
                </tr>
                <tr>
                  <td>20160360</td>
                  <td>Mir Sakhawat Hossen</td>
                  <td>Designation</td>
                  <td>1</td>
                  <td>&nbsp;&nbsp; Present &nbsp;<input type="checkbox" name="" id=""></td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td>Total meal :</td>
                  <td>55</td>
                  <td></td>
                </tr>
                <tr>
                  <td>Bazar :</td>
                  <td><input type="text" name="" value="6805" id=""></td>
                  <td></td>
                  <td>customar cell</td>
                  <td><input type="text" name="" value="6805" id=""></td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td><input type="submit" value="SAVE"></td>
                </tr>
              </tbody>
            </table>
          </div>
      </div>
    </div>
  </div>
</section>
<!-- show your meal section end -->
<br><br><br>

<?php 
  require "includes/footer.php"

 ?>