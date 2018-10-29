<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="/css/formulario.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
	
<style>
	.row_inicial {
		height: 50px;
	}

	img {
		display:block;
		margin:auto;
	}

</style>	


</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="#">SAM</a>
		
		<span class="navbar-toggler-icon"></span>
		</button>
		<div class="" id="navbarNav">
		    <ul class="navbar-nav">
			      <li class="nav-item active">
			        <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="cursos.php">Cursos</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="registro.php">Registro</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="ingresar.php">Ingresar</a>
			      </li>
		    </ul>
	 	 </div>
	</nav>
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" name="entrar">

		<div class="container">
			<div class="row_inicial">				
			</div>
			<div class="row no-gutters">
				<div class="col-4"></div>				
				<div class="col-4 block-center">
					<img src="img/CUE.gif" alt="" class="" height="200">
				</div>
				<div class="col-4"></div>
			</div>
			<div class="row mt-2">
				<div class="col-4"></div>
				<div class="col-4">
					<div class="input-group bm-0">
						<div class="input-group-prepend">
							<span class="input-group-text far fa-user"></span>
						</div>						
						<input type="text" name="usu" required class="form-control" placeholder="Usuario">
					</div>
				</div>
				<div class="col-4"></div>
			</div>					
			<div class="row mt-2">
				<div class="col-4"></div>
				<div class="col-4">
					<div class="input-group bm-0">
						<div class="input-group-prepend">
							<span class="input-group-text fas fa-key"></span>
						</div>						
						<input type="password" name="pass" required class="form-control" placeholder="Contraseña">
					</div>
				</div>
				<div class="col-4"></div>
			</div>	
			
			<div class="row mt-3">
				<div class="col-4"></div>
				<div class="col-4 d-flex justify-content-between">
						<div class="col-1">	</div>
						<input type="submit" value="Enviar" class="btn-primary btn-md">

						<input type="reset" value="Limpiar">
						<div class="col-1">	</div>
				</div>
				<div class="col-4"></div>
			</div>	

			<div class="row mt-3">
				<div class="col-4"></div>
				<div class="col-4">
					
					<?php if(!empty($errores)):?>
							<ul class="	alert-danger">
								<?php echo $errores; ?>
							</ul>

					<?php endif; ?>


				</div>
				<div class="col-4"></div>				
			</div>

		</div>
		</form>
	
</body>
</html>