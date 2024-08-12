<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SignIn&SignUp</title>
  <link rel="stylesheet" href="css/sign.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">


</head>

<body>

  <!-- Sign-in -->
  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
        <form method="post" class="sign-in-form">
          <h2 class="title">Log In</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" name="signin_name" placeholder="Username" />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="signin_pwd" />
          </div>
          <input type="submit" value="Login" class="btn solid" name="login-btn" />

          <p class="social-text">Or Log in with social platforms</p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-google"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
        </form>
        <?php
// include("connect.php");
$server="localhost";
$username="root";
$password="";
$dbname="shop";

$con=mysqli_connect($server,$username,$password,$dbname);
if($con)
{
    echo "";
}
else
{
    mysqli_connect_error($con);
}
if (isset($_POST['login-btn'])){
  $query="SELECT * FROM `signup` WHERE `signup_name`='$_POST[signin_name]' AND `signup_pwd`='$_POST[signin_pwd]'";
  $result=mysqli_query($con,$query);
  if($result)
  {
    if(mysqli_num_rows($result)==1)
    {
      $result_fetch=mysqli_fetch_assoc($result);
      session_start();
      $_SESSION['loggedin'] = true;
      $_SESSION['username'] = $signin_name;
      echo " <script>
      alert('LOGIN SUCCESSFULL');
      window.location.href='booknow.php';
      </script>
      ";
    }
    else{
      echo " <script>
        alert('WRONG USERNAME OR PASSWORD');
        window.location.href = 'sign.php';
      </script>
      ";
    }
  }
  
}


?>

        <!-- sign-up -->
        <form action="signup.php" method="post" enctype="multipart/form-data" class="sign-up-form">
          <h2 class="title">Sign Up</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" name="signup_name" placeholder="Username" />
          </div>
          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="email" name="signup_email" placeholder="Email" />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="signup_pwd" placeholder="Password" />
          </div>
          <input type="submit" value="Sign Up" class="btn solid" />

          <p class="social-text">Or Sign up with social platforms</p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-google"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
        </form>
      </div>
    </div>

    <!-- buttons -->
    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>New here?</h3>
          <p>Sign-up below</p>
          <button class="btn transparent" id="sign-up-btn">Sign Up</button>
        </div>
        <img src="./img/log.svg" class="image" alt="">
      </div>

      <div class="panel right-panel">
        <div class="content">
          <h3>One of us?</h3>
          <p>Log-in below</p>

          <button class="btn transparent" id="sign-in-btn">Login In</button>
        </div>
        <img src="./img/register.svg" class="image" alt="">
      </div>
    </div>
  </div>

  <script src="./app.js"></script>
</body>

</html>