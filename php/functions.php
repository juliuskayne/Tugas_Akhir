<?php 
	//connect sql
	$conn = mysqli_connect("localhost", "jadwalku", "smkimmanuel", "register");
	if(mysqli_connect_errno()){
		echo "Can't connect to the database ".mysqli_connect_error();
		exit();
	}

	function query($query){
		global $conn;
		$result = mysqli_query($conn, $query);
		$rows = [];
		while ($row = mysqli_fetch_assoc($result)){
			$rows[] = $row;
		}
		return $rows;
	}

	function register($data){
		global $conn;
		$nis = htmlspecialchars($data["nis1"]);
		$nama = htmlspecialchars(strtolower(stripslashes($data["nama1"])));
		$pw = htmlspecialchars(mysqli_real_escape_string($conn, $data["pw1"]));
		$cpw = htmlspecialchars(mysqli_real_escape_string($conn, $data["cpw"]));

		$res = mysqli_query($conn, "SELECT nama FROM user WHERE nama = '$nama'");

		if(mysqli_fetch_assoc($res)){
			echo "<script>
				alert('Your name already registered before');
			</script>";
			return false;
		}
		if($pw !== $cpw) return false;


		$pw = password_hash($pw, PASSWORD_DEFAULT);

		$query = "INSERT INTO user 
				 VALUES ($nis, '$nama', '$pw')";
		mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);
	}

	function delete($nis){
		global $conn;
		mysqli_query($conn, "DELETE FROM user WHERE nis = $nis");
		return mysqli_affected_rows($conn);
	}

	function search($key){
		$query = "SELECT * FROM user WHERE
					 nis LIKE '%$key%'OR
					 nama LIKE '%$key%' OR
					 pw LIKE '%$key%'";
		return query($query);
	}
 ?>