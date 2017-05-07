<html>
<head>
<link rel="stylesheet" type="text/css" href="button.css">
<link rel="stylesheet" type="text/css" href="button2.css">
<meta name="viewport" content="width=device-width, initial-scale=1" /> 
</head>
<body>
<form action="subjects.php" method="post">

<?php
$conn=mysqli_connect('localhost','root','','test');
$tablename=$_POST['tname'];
mysqli_query($conn,"TRUNCATE table ".$tablename."");
foreach($_POST['checklist'] as $selected){
mysqli_query($conn,"INSERT INTO ".$tablename." values('','".$selected."')");
}
?>
<center><h1>Attendance Taken!</h1></center>
<?php 
session_start();
echo "<input type=\"hidden\" name=\"name\" value=\"".$_SESSION['uname']."\">";
?>
<input type="submit" value="Done"/>


</form>
</body>
</html>