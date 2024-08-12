<?php
include_once("connect.php");

$var1=$_POST["f_name"];
$var2=$_POST["l_name"];
$var3=$_POST["p_number"];
$var4=$_POST["email"];
$var5=$_POST["date"];
$var6=$_POST["time"];
$var7=implode(',',$_POST["choice"]);


$query = "insert into appoint(f_name, l_name, p_number, email, Date ,time, choice) values('$var1', '$var2', '$var3', '$var4', '$var5', '$var6', '$var7')";
mysqli_query($con, $query); 

echo " <script>
alert('Response Submitted');
window.location.href = 'booknow.php';
</script>
";

?>



