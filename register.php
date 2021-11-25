<?php require_once("connection.php");?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form | SMMUT</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
	<?php 
		$nim = '';
		$nama = '';
		$alamat = '';
		$noWa = '';
		$email = '';
		$password = '';
		$jenisKelamin = @$_POST['jenis_kelamin'];
		// $fotoMember = $_POST[];
		$password = '';
		$benar = 0;
	

		

		
		if($_POST){
			include "validasi.php";
			if (validasiNip($errors,$_POST,'nim')){
				$nim = $_POST['nim'];
				$benar++ ;
			}
			if (validasiNama($errors,$_POST,'nama')){
				$nama = $_POST['nama'];
				$benar++ ;
			}
			if (validasiAlamat($errors,$_POST,'alamat')){
				$alamat = $_POST['alamat'];
				$benar++ ;
			}
			if (validasiNoTelp($errors,$_POST,'noWa')){
				$noWa = $_POST['noWa'];
				$benar++ ;
			}
			if (validasiEmail($errors,$_POST,'email')){
				$email = $_POST['email'];
				$benar++ ;
			}
			if (validasiPass($errors,$_POST,'password')){
				$password = $_POST['password'];
				$benar++ ;
			}
			
			
		}
		if ($benar == 6){
			// echo "<script>
			// 		alert('Registrasi Berhasil');
			// 		window.location = 'login.php';
			// 	</script>";
			// $w = "INSERT INTO `member` (`ID_MEMBER`, `NIM_MEMBER`, `NAMA_MEMBER`, `EMAIL_MEMBER`, `PASSWORD_MEMBER`, `ALAMAT_MEMBER`, `NO_TELEPON_MEMBER`, `JENIS_KELAMIN_MEMBER`, `FOTO_MEMBER`)
			// VALUES ('1', '1234', 'yoga', 'yoga@gmail.com', 'yogaekaz1', 'blitar', '1234', 'laki laki', NULL)";
			// $dbDriver->exec
			// $conn = databaseConnection();
			$dbHandler = new DatabaseHandler();
			$dbHandlerB = new DatabaseHandler();
			$idmember = $dbHandler->select_database('ID_MEMBER', 'member', ['NAMA_MEMBER' => $nama], ['NAMA_MEMBER' => 'DESC'], 1);
			// $q_idmember = $dbHandler->select_database('ID_MEMBER', 'member', ['NAMA_MEMBER' => $nama], ['NAMA_MEMBER' => 'DESC'], 1);
			$idmember = @$idmember[0]['ID_MEMBER'];
			// $idmember = $dbHandler->running($q_idmember);
			$lastIdMember = (!empty($idmember)) ? $idmember : $dbHandlerB->select_database('ID_MEMBER', 'member', [], ['ID_MEMBER' => 'DESC'], 1);
			// $coba = select_database($conn, );
			// var_dump($dbHandler->running($lastIdMember));
			if ($idmember) {
				echo '
				<script>
				alert("data sudah terdaftar")
				</script>
				';
			}else {
				$newId = (empty($lastIdMember[0]['ID_MEMBER'])) ? '1001' : intval($lastIdMember[0]['ID_MEMBER'])+1;
				$fotoMemberTemp = "";
				$fotoMember = (empty($fotoMember)) ? null : 'isi';
				$password = md5($password);
			$statusinsert = $dbHandler->insert_database('member', [
				'ID_MEMBER' => $newId,
				'NIM_MEMBER' => $nim,
				'NAMA_MEMBER' => "'$nama'",
				'EMAIL_MEMBER' => "'$email'",
				'PASSWORD_MEMBER' => "'$password'",
				'ALAMAT_MEMBER' => "'$alamat'",
				'NO_TELEPON_MEMBER' => "'$noWa'",
				'JENIS_KELAMIN_MEMBER' => "'$jenisKelamin'",
			]);
			if (empty($statusinsert)) {
				header('Location: login.php');
			}else{
				echo ($statusinsert);
			}
		}
		}

	?>
    <div class="container register">
      <div class="wrapper">
        <div class="title"><span>Registrasi Form</span></div>
        <form action="register.php" method="post">
          <div class="row">
		  	<i class="fas fa-user"></i>
            <select name="level">
				<option value="0">Daftar Sebagai ---</option>
				<option value="1">Sebagai Member</option>
				<option value="2">Sebagai Admin</option>

			</select>
		  </div>
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" name="nim" placeholder="NIM" value="<?= $nim ?>"/>
			<div class="error"><?php
				if(isset($errors['nim'])){ 
					echo $errors['nim'];
				}
			?>
			</div>
          </div>
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" name="nama" placeholder="Nama" value="<?= $nama ?>">
			<div class="error"><?php
				if(isset($errors['nama'])){ 
					echo $errors['nama'];
				}
			?>
			</div>
          </div>
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" name="email" placeholder="Email" value="<?= $email ?>">
			<div class="error"><?php
				if(isset($errors['email'])){
					echo $errors['email'];
				}
			?>
			
			</div>
		  </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" placeholder="Password" value="<?= $password ?>" >
			<div class="error"><?php
				if(isset($errors['password'])){ 
					echo $errors['password'];
				}
			?>
			</div>
		  </div>
		  <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" name="alamat" placeholder="Alamat" value="<?= $alamat ?>">
			<div class="error"><?php
				if(isset($errors['alamat'])){ 
					echo $errors['alamat'];
				}
			?>
			</div>
          </div>
		  <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" name="noWa" placeholder="No Telpon" value="<?= $noWa ?>">
			<div class="error"><?php
				if(isset($errors['noWa'])){ 
					echo $errors['noWa'];
				}
			?>
			</div>
          </div>
		  <div class="row">
            <i class="fas fa-user"></i>
            <select name="jenis_kelamin" aria-placeholder="masukkan jenis">
            	<option value="laki-laki">Laki-laki</option>
            	<option value="perempuan">Perempuan</option>
            </select>
            <div class="error"><?php
				if(isset($errors['jenis_kelamin'])){ 
					echo $errors['jenis_kelamin'];
				}
			?>
			</div>
          </div>
          <div class="pass"><a href="#">Lupa password?</a></div>
          <div class="row button">
            <input type="submit" name="submit" value="Register">
          </div>
          <div class="signup-link">Sudah punya akun? <a href="login.php">Login sekarang</a></div>
        </form>
      </div>
    </div>

  </body>
</html>
