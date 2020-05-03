<?php 
	require 'php/functions.php';
	$user = query("SELECT * FROM user ORDER BY nis");
	$i = 1;
	if(isset($_POST["no"]) and !empty($_POST["no"])){
		$user = search($_POST["no"]);
	}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<style>
	html{
		background-color: #222;
		color: white;
	}
	.form{
		padding: 0;
		margin: 0;
		background-color: white;
	}
	form{
		width: 100%;
		height: 100%;
		margin: 0;
		padding: 0;
	}
	.nis{
		width: 100%;
		height: 100%;
		margin: 0;
		border: none;
		text-align:  center;
	}
	.nis::placeholder{
		text-align:  center;
	}
	.head{
		background-color: #00ff19;
	}
	.head th{
		border: 1px solid #000;
		color: white;
	}
	.body{
		background-color: #fcdf00;
	}
	.body td{
		color: #333;
	}
</style>
<body>
	<h1 align="center">Daftar Siswa yang telah registrasi</h1>
	<table align="center" border="1" cellpadding="10" cellspacing="0">
		<tr class="form">
			<td colspan="7">
				<form action="" method="post">
					<input type="text" name="no" class="nis" value="" placeholder="Search..." autocomplete="off" autofocus>
				</form>
			</td>
		</tr>
		<tr class="head">
			<th>No.</th>
			<th>NIS</th>
			<th>Nama</th>
			<th>Password</th>
			<th colspan="2" align="center">Action</t>
		</tr>
		<?php foreach($user as $use):?>
		<tr class="body">
			<td><?= $i++?></td>
			<td><?= $use["nis"] ?></td>
			<td><?= $use["nama"] ?></td>
			<td><?= $use["pw"] ?></td>
			<td><button class="change">Change</button></td>
			<td><a href="php/delete.php?nis=<?= $use["nis"] ?>" onclick="return confirm('Are you sure want to delete this data');"><button class="remove">Delete</button></a></td>
		</tr>
		<?php endforeach;?>
	</table>
</body>
</html>