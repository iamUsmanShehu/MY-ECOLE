
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
<?php 
  include("includes/config.php");
?>
<!DOCTYPE html>
<html lang="en">
<?php include("php/header.php"); ?>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <!-- <a href=""><b><?=$name?></b></a> -->

  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg"><img src="dist/img/Ecole.jpg" style="width: 40%;"><br>
        <!-- <a href=""><b><?=$name?></b></a> --></p>
      <form method="POST" action="php/verify-result-checker">
        <div class="input-group mb-3">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-calendar"></span>
            </div>
          </div>
          <select type="text" class="form-control" name="session">
            <option>Session...</option>
            <option value="2">1992/1993</option>
          </select>
        </div>
        <div class="input-group mb-3">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
          <select type="text" class="form-control" name="term">
            <option value="2">2nd Term</option>
          </select>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Student ID" name="addmission_no">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="number" class="form-control" placeholder="Pin" name="pin">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          
          <!-- /.col -->
          <div class="col-12">
            <input type="submit" name="submit" class="btn btn-primary btn-block" value="Check Result">
          </div>
          <!-- /.col -->
        </div>
      </form>
      <hr>
      
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<?php //include("php/footer.php"); ?>
</body>
</html>
