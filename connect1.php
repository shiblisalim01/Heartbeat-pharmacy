<?php
$a=$_POST['name'];
$b=$_POST['email'];
$c=$_POST['age'];
$d=$_POST['number'];
$e=$_POST['password'];
$servername="localhost";
$username="root";
$password="";
$dbname="heartbeat";
$conn=mysqli_connect($servername,$username,$password ,$dbname);
if(!$conn)
{
	die("connection failed:".mysqli_connect_error());
}
else
{
	$sql="insert into `registration`(`name`,`email`,`age`,`number`,`password`) values('$a','$b','$c','$d','$e');";
	$var=mysqli_query($conn,$sql);
	if($var)
	{
		echo "<script>window.location.href='login.html'</script>";
	}
	else
	{
		echo "Error:".$sql."<br>".mysqli_error($conn);
	}
}
mysqli_close($conn);
?>