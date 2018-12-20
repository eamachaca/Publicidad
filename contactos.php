<!DOCTYPE html>
<html>
<head>
	<title>CONTACTANOS</title>
			<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="stylesheet" type="text/css" href="css/estilocontacto.css">
	<link href="https://file.myfontastic.com/2mu7sqFtLjMj9TvJVG4TgA/icons.css" rel="stylesheet">
</head>
<body>

      <?PHP  include"include/header.php" ?>

        <form action="enviar.php" method="post">
        
        	<h2>CONTACTO</h2>
        	<input type="text" name="NOMBRE:" placeholder="Nombre" required>
        	<input type="text" name="CORREO" placeholder="Correo" required>
        	<input type="text" name="TELEFONO" placeholder="telefono" required>
        	<textarea name="MENSAJE" placeholder="Escriba un mensaje aqui --->" required></textarea>
        	<input type="submit" value="ENVIAR" id="boton">
        </form>

                <?PHP  include"include/foot.php" ?>


</body>
</html>