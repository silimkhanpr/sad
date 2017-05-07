<html>
<head>
<link rel="stylesheet" type="text/css" href="button.css">
<link rel="stylesheet" type="text/css" href="button2.css">
<meta name="viewport" content="width=device-width, initial-scale=1" /> 
</head>
<body>

<center><h1>Mark the Attendance</h1></center><br><br>
<form action="update.php" method="post">

<?php
$conn=mysqli_connect('localhost','root','','test');
$subn=$_POST['subname'];
$tablename=$_POST['tname'];
$que="SELECT ".$subn." FROM sub_stud";
$result=mysqli_query($conn,$que);
while($row=mysqli_fetch_row($result))
{
$sub=$row[$subn];
echo "<input type=\"checkbox\" name=\"checklist[]\" value=\"".$sub."\"/> <b>".$sub."<b><br>";
}
echo "<input type=\"hidden\" name=\"tname\" value=\"".$tablename."\">";
echo "<br><input type=\"submit\" value=\"Submit\">";
?>
</form>

</body>
</html>
