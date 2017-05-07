<?php
$conn=mysqli_connect("localhost","root","","attendance");
session_start();
$checkBox[]=$_SESSION['stud'][];

$sql="SELECT * FROM sem1";
$n=mysqli_query($conn,$sql);
while($row=mysqli_fetch_row($n))
{
	echo "  ".$row[0];
}
if(isset($_POST['submit']))
{
	for($i=0; $i<sizeof($checkBox);$i++)
	{
		$n=sizeof($checkBox);
		echo " ".$n;
		$query="INSERT INTO sem1(maths) VALUES ('".$checkBox[$i]. "')";
		mysqli_query($conn,$query);
		echo "complete";
	}
}