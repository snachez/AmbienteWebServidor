<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Primera Clase</title>
</head>
<body>
<h1>Mi sitio</h1>
<h2><?php echo date("Y-m-d H:i:s"); ?></h2>
<p>AWS trata de crear sitios con apoyo de servidor pero sin meterle JAVA</p>
<ul><!-- clase.php -->
<li><a href="tiempo.php">Tiempo libre</a></li>	
<li><a href="vacaciones.php">Vacaciones</a></li>
</ul>
<hr>
<?php echo "<b>Diseño ".date("Y")."</b>"; ?>
</body>
</html>