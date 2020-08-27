<?php

if (isset($_GET['edad'])) {
	$mensaje1=$_GET['edad'];
	$mensaje2=$_GET['edad']+11;
} 
	else
	{$mensaje1="no definida";
	$mensaje2=$mensaje1;}

?>


<!DOCTYPE html>
<html>
<head>
	<title>informe</title>
</head>
<body>
	<p>la edad ingesara sera: <?php echo $mensaje1;?> y en once años sera:<?php echo $mensaje2;?></p>
</body>
</html>