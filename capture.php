<?php
include_once("connect.php");
$a1=$_POST["f_name"];
$a2=$_POST["l_name"];
$a3=$_POST["p_number"];
$a4=$_POST["email"];
$a5=$_POST["city"];
$a6=$_POST["area"];
$radio=$_POST["radio"];

// if(isset($_POST['submit'])){
// if(isset($_POST['radio']))
// {
// echo "You have selected :". $_POST['radio'];
// }
// }
 

// echo "<br>";
// echo $a1;
// echo "<br>";
// echo $a2;
// echo "<br>";
// echo $a3;
// echo "<br>";
// echo $a4;
// echo "<br>";
// echo $a5;
// echo "<br>";
// echo $a6;
// echo "<br>";
// echo $radio;

$query = "insert into joinus(First_name,Last_name,Contact,Mail,City,Area,Choice) values('$a1','$a2','$a3','$a4','$a5','$a6','$radio')";
mysqli_query($con,$query);
echo " <script>
alert('Response Submitted');
window.location.href = 'joinus.php';
</script>
";
?>

