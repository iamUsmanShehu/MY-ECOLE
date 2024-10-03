
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
<?php 
include("includes/config.php");
// include("php/queries.php");
  if (isset($_POST['submit'])) {

  $_SESSION['email'] = mysqli_real_escape_string($con, $_POST['user']);
  $_SESSION['username'] = mysqli_real_escape_string($con, $_POST['user']);
  $_SESSION['password'] = mysqli_real_escape_string($con, $_POST['password']);
  $_SESSION['remember'] = mysqli_real_escape_string($con, $_POST['remember'] ?? '');
  
    $sql = "SELECT * FROM users WHERE email = ? OR username = ?";
    // var_dump($sql);
    $stmt = mysqli_stmt_init($con);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      $response = "Problem Occur...";
    }else{
  if(($_SESSION['email'] || $_SESSION['username']) && $_SESSION['password'] ){
      mysqli_stmt_bind_param($stmt, 'ss', $_SESSION['email'], $_SESSION['username']);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      $numrows =  mysqli_stmt_num_rows($stmt);
    if($numrows == 0){
    
      $row = mysqli_fetch_assoc($result) ?? array();

      $id = $row['id'] ?? "";
      $dbemail = $row['email'] ?? "";
      $dbusername = $row['username'] ?? "";
      $dbpassword = $row['password'] ?? "";
      $fname = $row['fname'] ?? "";
      $lname = $row['lname'] ?? "";


      if($_SESSION['email'] == $dbemail || $_SESSION['username'] == $dbusername){
        if($_SESSION['password'] == $dbpassword){
        
          if(($_SESSION['remember']) == 'on'){
            $expire = time()+86400;
            setcookie('my-echole', $fname, $expire);
          }else{}
          $response = "<center ><span class='error'>Successful!</span></center>";
          header("refresh:2 url='php/dashboard'");
        
        }else{
          $response = "Your password is incorrect!";
        }
      
      }else{
        $response = "Your email/Username is incorrect!";
      }
    
    }else{
      $response = "This email/Username is not registered!";  
    }
  
  }else{
    $response = "You have to type a email/Username and password!";
  }
}
}

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
      <p class="login-box-msg"><img src="dist/img/Ecole.jpg" style="width: 50%;"><br>
        <a href=""><b><?=$name?></b></a></p>
      <?php if (isset($response)){echo $response;} ?>
      <form method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Email/Username" name="user">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
           <!--  <div class="icheck-primary">
              <input type="checkbox" id="remember" name="remember">
              <label for="remember">
                Remember Me
              </label>
            </div> -->
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" name="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <hr>
     <!--  <div class="row">
        <p class="mb-1 col-6">
          <a href="forgot-password.php">forgot password</a>
        </p>
        <p class="mb-0 col-6">
        </p>
      </div> -->
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<?php// include("php/footer.php"); ?>
</body>
</html>
