<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Insert</title>
</head>
<body background="images/banner1.jpg">
<?php

include 'conection.php';

$v1=$_POST['a'];
$v2=$_POST['b'];
$v3=$_POST['c'];
$v4=$_POST['d'];


$sql = "INSERT INTO comments(nombre,email,telefono,mensaje)
 VALUES('$v1','$v2','$v3','$v4')";
$query=mysqli_query($connection, $sql);
	

	if($query){
	
		echo "<script>
alert('Record inserted successfully');
window.location.assign('university.html')</script>";
		
	} else {
	echo "<script>alert('An error inserting the record');
	window.location.assign('university.html')</script>".$query."<br>".$connection->error;
	}
mysqli_close($connection);
?>
</body>
</html>