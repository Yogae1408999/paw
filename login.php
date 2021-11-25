<?php require_once("connection.php");?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form | SMMUT</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
	<?php
	$dbHandler = new DatabaseHandler();
	
	// print_r($dbs);
		$email = '';
		$password = '';
		$benar = 0;
		
		if($_POST){
			include 'validasi.php';
			if(validasiEmail($errors,$_POST,'email')){
				$email = $_POST['email'];
				$benar++;
			}
			if(validasiPass($errors,$_POST,'password')){
				$password = $_POST['password'];
				$benar++;
			}
			if ($benar == 2){
				$password = md5($password);
				$checkData = $dbHandler->select_database(
					'NAMA_MEMBER, PASSWORD_MEMBER', 'member', 
					['EMAIL_MEMBER' => $email, 'PASSWORD_MEMBER' => $password]);
										if (!empty($checkData)) {
					echo 'login berhasil';
				}else {
					echo 'username/password salah';
				}
		}
		}
	?>
    <div class="container">
      <div class="wrapper">
        <div class="title"><span>Login Form</span></div>
        <form action="login.php" method="post">
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Email or Phone" name="email" value="<?= $email ?>">
			<div class="error"><?php
				if(isset($errors['email'])){ 
					echo $errors['email'];
				}
			?>										
			</div>
		  </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="password" value="<?= $password ?>">
			<div class="error"><?php
				if(isset($errors['password'])){ 
					echo $errors['password'];
				}
			?>
			</div>
		  </div>
		  
		  <div class="row">
		  	<i class="fas fa-user"></i>
            <select name="level">
				<option value="0">Login Sebagai ---</option>
				<option value="1">Sebagai Member</option>
				<option value="2">Sebagai Admin</option>

			</select>
		  </div>
		  
          <div class="pass"><a href="#">Lupa password?</a></div>
          <div class="row button">
            <input type="submit" value="Login" name="login">
          </div>
          <div class="signup-link">Belum daftar? <a href="register.php">Daftar sekarang</a></div>
        </form>
      </div>
    </div>

  </body>
</html>
