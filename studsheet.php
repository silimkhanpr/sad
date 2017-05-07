<html>
<head>

<body>
<table border=2>
<?php
$subname=$_GET['subb'];
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment;Filename=$subname.xls");
$conn=mysqli_connect('localhost','root','','test');
echo "<tr>";
echo "<th></th>";
$result=mysqli_query($conn,"SHOW TABLES LIKE '$subname%'");
$likenm="Tables_in_test (".$subname."%)";
while($row=$result->fetch_assoc())
{
echo"<th>$row[$likenm]</th>";
}
echo "</tr>";
$result2=mysqli_query($conn,"SELECT $subname FROM sub_stud");
while($row2=$result2->fetch_assoc())
{
echo "<tr>";
echo "<td>$row2[$subname]</td>";
$result3=mysqli_query($conn,"SHOW TABLES LIKE '$subname%'");
while($row=$result3->fetch_assoc())
{
$result4=mysqli_query($conn,"SELECT * FROM $row[$likenm] where enroll='$row2[$subname]'");
if(mysqli_num_rows($result4)==1)
{
echo "<td><center>P</center></td>";
}
else
{
echo "<td><center>A</center></td>";
}
}
echo "</tr>";
}
?>
</table>
</body>
</html>