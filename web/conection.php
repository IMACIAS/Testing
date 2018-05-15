<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Connection with database users</title>
</head>
<body>
<?php

$connection = mysqli_connect("localhost","admin","2f9jmCi02emommLo")  
or die ('No se pudo conectar con el servidor'.mysqli_error());

$db= @mysqli_select_db($connection,"users") or die ('No se pudo conectar con la base de datos '.mysqli_error());


?>
</body>
</html>