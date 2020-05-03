<?php 
	session_start();

	if(isset($_SESSION["login"])){
		header("Location: mainpage.php");
		exit;
	}

	require 'php/functions.php';
	$conn = mysqli_connect("localhost", "jadwalku", "smkimmanuel", "register");
	if(isset($_POST["register"])){
		if(register($_POST) > 0){
			echo "<script>
				alert('Registration was success');
			</script>";
		}else{
			echo "<script>
				alert('Registration was failed, please check again your nis, name, password, and confirm password');
			</script>";
			echo mysqli_error($conn);
		}
	}

	if(isset($_POST["login"])){
		$nis = $_POST["nis"];
		$nama = $_POST["nama"];
		$pw = $_POST["pw"];

		$res = mysqli_query($conn, "SELECT * FROM user WHERE nis = $nis");

		if(mysqli_num_rows($res) === 1){
			$row = mysqli_fetch_assoc($res);
			$db_nis = $row["nis"];
			$db_nama = $row["nama"];
			$db_pw = $row["pw"];

			if($nis == $db_nis && $nama == $db_nama){
				if(password_verify($pw, $db_pw)){
					$_SESSION["name"] = $nama;
					$_SESSION["nis"] = $nis;
					$_SESSION["login"] = true;
					header("Location: mainpage.php");
				}
			}
		}
		$error = true;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Candal" />
	<link href="css/login.css" rel="stylesheet">
</head>
<body>
	<header>
		<div class="title"><h1>JADWALKU</h1></div>
		<div class="click" onclick="myClick()">
			<button >LOGIN / SIGNUP</button>
		</div>
	</header>
	<div class="dark">
		<div class="box">
			<div class="login">
				<div class="login-head" onclick="logOpen()"><p>LOGIN</p></div>
				<div class="login-body">
					<form class="log-form" action="" method="post">
						<div class="part">
							<label for="nis">NIS</label>
							<input type="text" name="nis" class="nis" id="nis" value="" placeholder="Input Your NIS" onblur="this.placeholder= 'Input Your NIS'" onfocus="this.placeholder = ''" required autocomplete="off">
						</div>
						<div class="part">
							<label for="nama">Name</label>
							<input type="text" name="nama" id="nama" value="" class="name" placeholder="Input your Name" onblur="this.placeholder = 'Input Your Name'" onfocus="this.placeholder = ''" required autocomplete="off">
						</div>
						<div class="part">
							<label for="pw">Password</label>
							<input type="password" name="pw" id="pw" value="" class="password" placeholder="Input Your Password" onblur="this.placeholder = 'Input Your Password'" onfocus="this.placeholder = ''" required autocomplete="off">
						</div>
						<?php if(isset($error)):?>
						<?= "<script>
							document.querySelector('.box').style.display = 'block';;
							document.querySelector('.dark').style.display = 'block';;
						</script>" ?>
						<div class="text" style="color: white;">Please Check Again your nis, name and password</div>
						<?php endif;?>
						<div class="button">
							<button class="close" onclick="toClose()">Back</button>
							<button class="loginbutton" name="login" type="submit" onclick="login()">Login</button>
						</div>
					</form>
				</div>
			</div>
			<div class="register">
				<div class="register-head" onclick="regOpen()"><p>REGISTER</p></div>
				<div class="register-body">
					<form class="reg-form" action="" method="post">
						<div class="part">
							<label for="nis1">NIS</label>
							<input type="text" name="nis1" class="nis" id="nis1" value="" placeholder="Input Your NIS" onblur="this.placeholder= 'Input Your NIS'" onfocus="this.placeholder = ''" required autocomplete="off">
						</div>
						<div class="part">
							<label for="nama1">Name</label>
							<input type="text" name="nama1" id="nama1" value="" class="name" placeholder="Input your Name" onblur="this.placeholder = 'Input Your Name'" onfocus="this.placeholder = ''" required autocomplete="off">
						</div>
						<div class="part">
							<label for="pw1">Password</label>
							<input type="password" name="pw1" id="pw1" value="" class="password" placeholder="Input Your Password" onblur="this.placeholder = 'Input Your Password'" onfocus="this.placeholder = ''" required autocomplete="off">
						</div>
						<div class="part">
							<label for="cpw">Confirm Password</label>
							<input type="password" name="cpw" id="cpw" value="" class="cpassword" placeholder="Re-Type Your Password" onblur="this.placeholder = 'Re-Type Your Password'" onfocus="this.placeholder = ''" required autocomplete="off">
						</div>
						<div class="button">
							<button class="close" onclick="toClose()">Back</button>
							<button class="registerbutton" name="register" type="submit" onclick="register()">Register</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="desc1">
		<div class="descimg1">
			<img src="img/tugas.jpg" style =" max-width: 450px	; margin-top: 90px; position: relative; border-radius: 30%; border: 2px solid #000;">
		</div>
		<h1>Pemberian Tugas Yang Lebih Mudah!</h1>
	</div>
	<hr>
	<div class="desc2">
		<h1 align="right">Memudahkan Dalam Melihat Jadwal Harian!</h1>
		<div class="descimg2">
			<img src="img/jadwal.jpg" style =" max-width: 430px; margin-top: 90px; position: relative; border-radius: 30%; border: 2px solid #000;">	
		</div>
	</div>
	<hr>
	<div class="desc1">
		<div class="descimg1">
			<img src="img/pengumuman.jpg" style =" max-width: 450px; margin-top: 90px; position: relative; border-radius: 30%; border: 2px solid #000;">
		</div>
		<h1>Pengumuman Lebih mudah Disampaikan!</h1>
	</div>
	<!-- desc-end -->

	<div class="footer">
	    <div class="footer-content">
	    	<div class="readit-content">
		      	<p class="readit-title" style="color: white">
		      		About<b>Us</b>.
		    	</p>
		    	<p class="readit-p">Our Social Media : <br>
		     		<a class="hover" href="https://www.instagram.com/nicodemus_ks/" style="color: white;">@Nicodemus K.S</a> <br>
		     		<a class="hover" href="https://www.instagram.com/ivan_cristiansen/" style="color: white;">@Ivan C</a> <br>
		     		<a class="hover" href="https://www.instagram.com/juliuskayne/" style="color: white;">@Julius K</a>
		    	</p>
		     	<div class="readit-icon">
		     		<a href="https://www.instagram.com/smkimmanuelptk/">
		    		<img src="img/logo2.png" style="width: 160px;"></a>
	     		</div>
  			</div>
	    	<div class="news-content">
		      	<p class="news-title" style="font-size: 20px;">INFORMASI : <br> <br>
		        Alamat: Jl. Letnan Jendral Sutoyo, <br>Parit Tokaya, Kec. Pontianak Sel., Kota Pontianak, Kalimantan Barat 78113  <br> <br>
		        Jam buka: <br>
		        Senin-Sabtu 06.00–15.00 <br>
		        Minggu  Tutup <br> <br>
		        
		        Telepon: (0561) 737921 <br>
		        Provinsi: Kalimantan Barat </p>
		    </div>
	      
	     	<div class="news-gabungan">
	     		<img src="img/logo.png">
	      	</div>
	    </div>

	    <div id="hri" style="text-align: center; color: white;">
	    	<span id="hrip"></span>
	     	<span id="d-m-y"></span>
		</div>
	</div>
</body>
<script src="js/login.js"></script>
</html>