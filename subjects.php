<html>
<head>

<link rel="stylesheet" type="text/css" href="button.css">
<meta name="viewport" content="width=device-width, initial-scale=1" /> 
</head>
<body>

<center><h1>Subjects</h1></center><br><br>
<form action="between.php" method="post">

<?php
session_start();

$conn=mysqli_connect('localhost','root','','test');
$result=mysqli_query($conn,"SELECT * from faculty where uname='".$_POST['uname']."'");
$r=mysqli_fetch_row($result);
$fname=$_POST['uname'];
$_SESSION['uname']=$_POST['uname'];
if($_SESSION[$fname]=="")
{
	header('Location:flogin.html');
}
if($_SESSION[$fname]!=$r[1])
{
	header('Location:flogin.html');
}
$sql="SELECT * from subjects where uname='".$_POST['uname']."'";
$result=mysqli_query($conn,$sql);

while($row=mysqli_fetch_row($result))
{
	$sub=$row[1];
	echo "<input type=\"submit\" name=\"subb\" value=\"".$sub."\">";
	echo "<br><br>";
}
mysqli_close($conn);
?>
</table>
</form>

</body>
</html>