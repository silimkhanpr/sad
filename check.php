<html>
<head>
<link rel="stylesheet" href="button.css">
<link rel="stylesheet" href="button2.css">
<body>
<form action="subjects.php" method="POST">

<?php
$conn=mysqli_connect('localhost','root','','test');
$query="SELECT * from faculty where uname='".$_POST['uname']."'";
$result=mysqli_query($conn,$query); 

$row=mysqli_fetch_row($result);

if($row[1]==$_POST['password'])
{
	session_start();
	$_SESSION[$_POST['uname']]=$_POST['password'];
	echo "<center><h2>Welcome Prof.".$row[2]."</h2></center><br><br><br><br><br>";
	echo "<input type=\"hidden\" name=\"uname\" value=\"".$_POST['uname']."\" >";
	echo "<input type=\"submit\" value=\"Next\" >";
}
else
{
	//header('Location:flogin.html');
}
?>
</form>
</body>

</html>