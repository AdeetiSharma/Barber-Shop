<?php
include_once("connect.php");
$signup_name=$_POST["signup_name"];
$signup_email=$_POST["signup_email"];
$signup_pwd=$_POST["signup_pwd"];


$query = "insert into signup(signup_name, signup_email, signup_pwd) values('$signup_name', '$signup_email', '$signup_pwd')";
{
    session_start();
      $_SESSION['loggedin'] = true;
      $_SESSION['username'] = $signin_name;
      echo " <script>
      alert('SIGN-UP SUCCESSFULL');
      window.location.href='booknow.php';
      </script>
      ";
}
// header('location: index.php');
mysqli_query($con,$query);

?>