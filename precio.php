<!DOCTYPE html>
<html>
<head>
	<title>Calcular precio</title>
	<style type="text/css">
		body{
			background: rgba(183,222,237,1);
background: -moz-linear-gradient(top, rgba(183,222,237,1) 0%, rgba(113,206,239,1) 50%, rgba(33,180,226,1) 51%, rgba(183,222,237,1) 100%);
background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(183,222,237,1)), color-stop(50%, rgba(113,206,239,1)), color-stop(51%, rgba(33,180,226,1)), color-stop(100%, rgba(183,222,237,1)));
background: -webkit-linear-gradient(top, rgba(183,222,237,1) 0%, rgba(113,206,239,1) 50%, rgba(33,180,226,1) 51%, rgba(183,222,237,1) 100%);
background: -o-linear-gradient(top, rgba(183,222,237,1) 0%, rgba(113,206,239,1) 50%, rgba(33,180,226,1) 51%, rgba(183,222,237,1) 100%);
background: -ms-linear-gradient(top, rgba(183,222,237,1) 0%, rgba(113,206,239,1) 50%, rgba(33,180,226,1) 51%, rgba(183,222,237,1) 100%);
background: linear-gradient(to bottom, rgba(183,222,237,1) 0%, rgba(113,206,239,1) 50%, rgba(33,180,226,1) 51%, rgba(183,222,237,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#b7deed', endColorstr='#b7deed', GradientType=0 );
		}
		.form{
			width: 200px;
			border: 2px solid black;
			padding: 20px;
			text-align: center;
			background: rgba(0,0,0,0.5);
			color: white;
			border-radius: 50px;
			font-family: sans-serif;
			font-size: 15px;
			margin: 20px auto;
		}
		input{
			margin: 5px 0px;
			padding: 5px;
		}

	</style>
</head>
<body>
	<form action="media.php" method="get" name="formulario" class="form">
		<h2>Calcular promedio Productos</h2>
		<label>Ingres el precio del primer producto</label><input type="text" name="precio1" class="in">
		<label>Ingres el precio del segundo producto</label><input type="text" name="precio2" class="in">
		<label>Ingres el precio del tercer producto</label><input type="text" name="precio3" class="in">
		<input type="submit" name="enviar" value="Enviar">
	</form>
</body>
</html>