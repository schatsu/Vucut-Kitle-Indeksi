
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Vücüt Kitle İndeksi Hesaplama</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form action="index.php" method="POST" class="login100-form validate-form">
					<span class="login100-form-title p-b-26">
					Vücüt Kitle Endeksi Hesaplama Aracı
					</span>
					<?php if($_POST){
   	 					$Boy = $_POST['Boy'];
   						 $Kilo = $_POST['Kilo'];
    					if($Boy > 0 && $Kilo > 0){
        				$Hesapla = $Kilo/(($Boy/100)*($Boy/100));}} ?>
				

					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="Kilo">
						<span class="focus-input100" data-placeholder="Kilonuz (kg)"></span>
					</div>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="number"  name="Boy">
						<span class="focus-input100" data-placeholder="Boyunuz (cm)"></span>
					</div>
					

				    <label>sonuç:</label>
					<div class="wrap-input100 ">
						<input class="input100" value="<?php echo number_format(@$Hesapla,2,',') ?>" type="text" name="Sonuc">
						<span class="focus-input100"></span>
					</div>
					<?php
					
					if (@$Hesapla>1 && $Hesapla <18.5) {?>
                    <!-- sweet alert2 -->
					<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
						<script>
							Swal.fire({
						position: 'center',
						icon: 'warning',
						title: 'Zayıf',
						showConfirmButton: true,
						timer: 5000
									})
						</script>
				<?php	} if (@$Hesapla>18.5 && $Hesapla <25) {?>
					<!-- sweet alert2 -->
				<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
					<script>
							Swal.fire({
						position: 'center',
						icon: 'success',
						title: 'Normal',
						showConfirmButton: true,
						timer: 5000
									})
						</script>
				<?php } if (@$Hesapla>25 && $Hesapla <29.9) { ?>
					<!-- sweet alert2 -->
				<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
						<script>
							Swal.fire({
						position: 'center',
						icon: 'warning',
						title: 'Fazla Kilolu',
						showConfirmButton: true,
						timer: 5000
									})
						</script>
				<?php } if (@$Hesapla>30 && $Hesapla <34.9) { ?>
					<!-- sweet alert2 -->
				<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
						<script>
							Swal.fire({
						position: 'center',
						icon: 'error',
						title: '1.Sınıf Obez',
						showConfirmButton: true,
						timer: 5000
									})
						</script>
				<?php } if (@$Hesapla >= 35 && $Hesapla < 44.9) { ?>
					<!-- sweet alert2 -->
				<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
						<script>
							Swal.fire({
						position: 'center',
						icon: 'error',
						title: '2.Sınıf Obez',
						showConfirmButton: true,
						timer: 5000
									})
						</script>
				<?php } ?>
					
					
					

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" name="hesapla">
								Hesapla
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

	

</body>
</html>