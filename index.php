<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "geo";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script
      src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css" />
    <title>Sign in & Sign up Form</title>
    <link rel="icon" type="image/x-icon" href="img/ro.png">
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="#" method="POST" class="sign-in-form" autocomplete="off">
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name="usern" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="pas" required/>
            </div>
            <button type="submit" value="Login" name="login" class="btn solid" ><i class="fa fa-paper-plane" aria-hidden="true"></i>&nbsp;&nbsp;Login</button>
          </form>
          <form action="#" method="POST" class="sign-up-form" autocomplete="off">
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name="user" required/>
            </div>
            <div class="input-field">
              <i class="fas fa fa-mobile-phone"></i>
              <input type="text" placeholder="Mobile no" name="mob" class="mob" maxlength="10" pattern="[1-9]{1}[0-9]{9}" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" name="mail" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required/>
            </div>
            <p style="font-size:70%;margin-left:20%;">Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters</p>
            <button type="submit" class="btn" name="signup" value="Sign up" ><i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp;&nbsp;Sign Up</button>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            First Create Your Account&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            If You Already Have an Account..?&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>
    <script src="app.js"></script>
  </body>
</html>
<?php
session_start();
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST["signup"])){
    $user=$_POST['user'];
    $pass=$_POST['pass'];
    $_SESSION["pas"] = "$pas";
    $mail=$_POST['mail'];
    $mob=$_POST['mob'];
    $_SESSION["mob"] = "$mob";
    $sq= "SELECT * FROM signup WHERE mob = '$mob' ";
    $resul = mysqli_query($conn,$sq);
    $chec = mysqli_fetch_array($resul);
    if($chec){
      echo '<script type="text/javascript">swal("Mobile number already Registered..!", "Please Try Again Another Mobile Number", "warning");</script>';
    }
    else{
    $sql="INSERT INTO signup(sno,user,pass,mail,mob)VALUES(NULL,'$user','$pass','$mail','$mob')";
    $result = mysqli_query($conn,$sql);
    if (isset($result)) {
        echo '<script type="text/javascript">swal("User Created..!", "Now we are family!", "success");</script>';
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
}
}
if(isset($_POST["login"])){
    $usern=$_POST['usern'];
    $pas=$_POST['pas'];
    $sqll= "SELECT * FROM signup WHERE user = '$usern' AND pass = '$pas' ";
    $result = mysqli_query($conn,$sqll);
    $check = mysqli_fetch_array($result);
    if(isset($check)){
      echo '<script type="text/javascript">swal("Login Successful..!", "Welcome!", "success") .then(function() {
        window.location = "dashboard.php";
    }); </script>';
    }else{
        echo '<script type="text/javascript">swal("Login Failed..!", "username or password is Incorrect!", "error");</script>';
    }
    }
?>