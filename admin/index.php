<!DOCTYPE html>
<html>
<head>
	<title>Administrador</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style type="text/css">
    	body{
    		background-color: #f7dfc1c4;
    	}
    	.form{
    		background-color: white;
    		padding: 1.5em;
    		margin-top: 3em;
    	}
    </style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="offset-md-4 col-md-3 form">
				<img src="marca.png" width="100%">
				<div style="text-align: center">
					<form method="POST" action="validarinicio.php" style="padding-left: 1em; padding-right: 1em;">
						<h5>Gestor de Imágenes</h5>
						<br>
						<label>Contraseña:</label><br>
						<input type="password" name="password" class="form-control">
						<br>
						<input type="submit" name="" value="Ingresar" class="btn btn-success btn-sm">			
					</form>
				</div>				
			</div>
		</div>
	</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>