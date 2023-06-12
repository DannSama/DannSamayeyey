<?php
require '../koneksi.php';
global $koneksi;
if (isset($_POST["btnlanjut"])){
    $namalengkap = htmlspecialchars(addslashes(ucwords($_POST['namalengkap'])));
    $username = htmlspecialchars(addslashes(ucwords($_POST['username'])));
    $email = htmlspecialchars(addslashes(ucwords($_POST['email'])));
    $password = htmlspecialchars(addslashes(ucwords($_POST['password'])));
    $rpassword = htmlspecialchars(addslashes(ucwords($_POST['password_confirmation'])));
	$epassword = password_hash($password, PASSWORD_DEFAULT);

		$checkUsername = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE username = '$username'");
		$cekUser = mysqli_num_rows($checkUsername);
  	if ($cekUser > 0) {
		setAlert("Gagal Daftar!", "Username Telah Terdaftar!", "error");
		header("Location: signup.php");
  		} else {
		if ($password != $rpassword){setalert("Registered Failed" , "Password Harus Sama!" , "error");
			header("Location: signup.php");
	     
		}
			    else{	
            tambahUser($_POST);
			
setalert("Registrasi Berhasil" , "Data Berhasil Ditambahkan!" , "success");
			header("Location: login.php");
        }
		}
    
    }
?>
<!DOCTYPE html>
<html>
<head>
  <?php include '../include_admin/css.php'; ?>
  <title>Login Administrator</title>
  <style>
	* {
	    margin: 0;
	    padding: 0;
	    box-sizing: border-box;
	}

  	body {
	    min-height: 100vh;
	    background-size: cover;
	    background-repeat: no-repeat;
	    background-image: url(../assets/img/img_properties/bg-login.jpg);
	}
	
  	.container {
	    position: absolute;
	    left: 50%;
	    top: 50%;
	    transform: translate(-50%, -55%);
	}
</style>
</head>
<body>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-4 mx-5 py-4 px-5 text-dark rounded border border-dark" style="background-color: rgba(180,190,196,.6);">
				<h2 class="text-center">Selamat Datang</h2>
				<h3 class="text-center">Administrator</h3>
				<form method="post">
					<div class="form-group">
						<label for="namalengkap"><i class="fas fa-fw fa-user-circle"></i> Nama lengkap</label>
						<input required class="form-control rounded-pill" type="text" name="namalengkap" id="namalengkap">
					</div>

					<div class="form-group">
						<label for="username"><i class="fas fa-fw fa-user"></i> Username</label>
						<input required class="form-control rounded-pill" type="text" name="username" id="username">
					</div>
					<div class="form-group">
						<label for="email"><i class="fas fa-fw fa-envelope"></i> Email</label>
						<input required class="form-control rounded-pill" type="email" name="email" id="email">
					</div>
					<div class="form-group">
						<label for="password"><i class="fas fa-fw fa-lock"></i> Password</label>
						<input required class="form-control rounded-pill" type="password" name="password" id="password">
					</div>
					<div class="form-group">
						<label for="password_confirmation"><i class="fas fa-fw fa-lock"></i> Retype Password</label>
						<input required class="form-control rounded-pill" type="password" name="password_confirmation" id="password_confirmation">
					</div>
					<div class="form-group">
						<a href="login.php" class="btn btn-info rounded-pill text-left"><i class="fas fa-fw fa-arrow-left"></i> Back</a>
		
						<button class="btn btn-success rounded-pill float-right" type="submit" name="btnlanjut"><i class="fas fa-fw fa-sign-in-alt"></i>Register</button>

					</div>
				</form>
			</div>
		</div>
	</div>

	<footer style="position: absolute; bottom: 0; width: 100%; text-align: center;">
		<div style="background-color: transparent;" class="container-fluid mt-5">
			<div class="row justify-content-center">
				<div class="col-lg text-center text-white pt-4 pb-2">
					<p>&copy; Copyright 2023. By Trio Ngantuk All Right Reserved.</p>
				</div>
			</div>
		</div>
	</footer>
</body>
</html>
