<?php 
	session_start();
	if(!isset($_SESSION["login"])){
		header("Location: homepage.php");
		exit;
	}
 ?>


<!DOCTYPE html>
<html>
<head>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
<style>
	html{
		align-content: center;
		margin: 0 auto;
	}
	body{
		margin: 0 auto;
		width: 100%;
	}
	*{
		font-family: "Poppins", Arial, sans-serif;
	}
	a{
  		text-decoration: none;
 		color: aqua;
	}
	.container img{
		border-radius: 50%;
	}
	.container{
		background: yellow;
		width: 100%;
	}
	.sisi1{
		text-align:center;
		margin: 0 auto;
		padding: 0 0 30px 0;
	}
	.sidebar{
		padding: 20px;
		background : black;
		color: white;
	}
	.sidebar a{
		font-size: 30px;
	}
	.homework{
		float: left;
	}
	.Schedule{
		float: right;
		width: 30%;
	}
	.class{
		float: right;
		width: 15%;
	}
	.home{
		color: #00FFFF;
	}
	.testt{
		margin: 0 90px 0 90px;
	}
	.namaa{
		font-size: 50px;
		font-family: arial; 
		font-style: bold;
		text-transform: capitalize;
	}
	.niss{
		opacity: 0.5;
		font-size: 36px;
	}
	.logout{
		background: yellow;
		border: 2px solid #000000;
		padding: 30px 10px;
		border-radius: 20px;
		margin: 20px 200px;
		font-family: "Poppins", Arial, sans-serif;
		font-style: bold;
		font-size: 40px;
		cursor: pointer;
	}
	.logout1{
		cursor: pointer;
		margin: 40px 200px;
		border: 2px solid #000000;
		border-radius: 20px;
		padding: 30px 0;
	}
	.logout1 a{
		background: yellow;
		border-radius: 20px;
		color: black;
		padding: 30px 387px;
		font-family: "Poppins", Arial, sans-serif;
		font-style: bold;
		font-size: 40px;
	}
	.footer {
	    background-color: #222831;
	    min-height: 530px;
	    margin-top: 100px;
	    margin-bottom: 0;
	    padding-bottom: 30px;
	}

	.footer-content {
	    display: flex;
	    flex-wrap: wrap;
	    color: white;
	    width: 1320px;
	    margin: 0 auto;
	}

	.readit-content {
	    margin-top: 50px;
	    flex: 0 0 30%;
	    max-width: 30%;
	}

	.readit-title {
	    font-size: 30px;
	    font-weight: 800;
	    margin-bottom: 40px;
	}

	.readit-p {
	    font-size: 18px;
	    line-height: 1.7em;
	    margin-bottom: 50px;
	}

	.hover:hover {
	    box-shadow: 0 0 4px 2px #0080ff;
	}

	.news-content {
		position: relative;
	    margin-top: 60px;
	    flex: 0 0 30%;
	    max-width: 30%;
	}

	.news-title {
	    font-size: 22px;
	    margin-bottom: 50px;
	}

	.news-gabungan {
	    flex: 0 0 30%;
	    max-width: 30%;
	}

	.news-gabungan img {
	    margin-top: 25%;
	    margin-left: 40%;
	    position: relative;
	    width: auto;
	    height: auto;
	}

	.readit-p a {
	    text-decoration: none;
	    color: black;
	}
</style>
</head>
<body align=center>
	<div class="container">
		<div class="sisi1">
			<img src="logo1.png"></img>
			<div class="namaa"><?= $_SESSION["name"]; ?></div>
			<div class="niss"><?= $_SESSION["nis"]; ?></div>
		</div>
	</div>

	<div class="sidebar">
		<div class="testt">
			<a href="mainpage.php" class= "home">Home</a>
	   	 	<a href="homework.php" class= "homework">HomeWork</a>
	    	<a href="class.php" class="class">Class</a>
	    	<a href="Schedule.php" class="Schedule">Schedule</a>
		</div> 
	</div>
	
	<div class="body">
		<div class="logout1"><a href="php/logout.php">LOG OUT</a></div>	
		<div class="logout">ABOUT US</div>		
	</div>


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



<script src="js/login.js"></script>
</body>
</html>