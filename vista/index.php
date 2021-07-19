<?php include('header.php'); ?>
<?php
	session_start();

	if (isset($_SESSION['id'])){
		//$query=mysqli_query($conn,"select * from user where userid='".$_SESSION['id']."'");
		//$row=mysqli_fetch_array($query);

		if ($row['access']==1){
			header('location:admin/');
		}
		else{
			header('location:user/');
		}
	}
?>

<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100" style="margin-top: 10%!important;">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>
				<form method="POST" action="login.php" style="margin: 0 auto;">
					<div class="text-center" style="margin-bottom:20px">
						<a class="txt2" href="../index.html">

							<i class="fa fa-long-arrow-left m-l-5" aria-hidden="true"></i>
							Regresar
						</a>
					</div>
					<span class="login100-form-title">
						Login
					</span>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="username" placeholder="Usuario">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password" placeholder="Contraseña">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Ingresar
						</button>
					</div>
					<center>
						<?php

				if(isset($_SESSION['msg'])){
					echo $_SESSION['msg'];
					unset($_SESSION['msg']);
				}

			?>

					</center>
					<div class="text-center p-t-136">
						<a class="txt2" href="/vista/reguistrarUsuario.php">
							Registrate
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>


				</form>

			</div>
		</div>
	</div>
	<?php include('script.php'); ?>
	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script>
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>
</body>

</html>