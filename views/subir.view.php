<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/estilos.css">

	<title>Galeria</title>
</head>
<body>

	<header>
		<div class="contenedor">
			<h1 class="titulo"> Foto: 1.jpg</h1>
		</div>
	</header>
	<div class="contenedor">
		
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method= "post" enctype= "multipart/form-data" class="formulario">
			<label for="foto">Selecciona tu foto</label>
			<input type="file" name="foto" id="foto">

			<label for="titulo">Titulo de la foto</label>
			<input type="text" name="titulo" id="titulo">

			<label for="texto">Descripcion</label>
			<textarea name="texto" id="texto" placeholder="agrega una descripcion"></textarea>
			<?php if (isset($error)): ?>
				<p class="error"><?php echo $error; ?></p>
			<?php endif ?>

			<input type="submit" class="submit" value="Subir foto">
		</form> 

	</div>
	<footer>
		<p class="copyright">Galería creada por Luis</p>
	}
	</footer>
	
</body>
</html>