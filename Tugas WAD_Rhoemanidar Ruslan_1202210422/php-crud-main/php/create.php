<?php 

if (isset($_POST['create'])) {
	include "../db_conn.php";
	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$name = validate($_POST['name']);
	$alamat = validate($_POST['alamat']);
	$email = validate($_POST['email']);
	$telepon = validate($_POST['telepon']);
	$barang = validate($_POST['barang']);
	$tanggal_lahir = validate($_POST['tanggal_lahir']);

	$user_data = 'name='.$name. '&email='.$email. '&alamat='.$alamat. 'telepon='.$telepon. '&barang='.$barang. 'tanggal_lahir'.$tanggal_lahir;

	if (empty($name)) {
		header("Location: ../index.php?error=Name is required&$user_data");
	}else if (empty($email)) {
		header("Location: ../index.php?error=Email is required&$user_data");
	}else if (empty($alamat)) {
		header("Location: ../index.php?error=Alamat is required&$user_data");
	}else if (empty($telepon)) {
		header("Location: ../index.php?error=Telepon is required&$user_data");
	}else if (empty($barang)) {
		header("Location: ../index.php?error=Barang is required&$user_data");
	}else if (empty($tanggal_lahir)) {
		header("Location: ../index.php?error=Tanggal Lahir is required&$user_data");
	}else {
		
	

       $sql = "INSERT INTO atk_palem(name, email, alamat, telepon, barang, tanggal_lahir) 
               VALUES('$name', '$email', '$alamat', '$telepon', '$barang', '$tanggal_lahir')";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: ../read.php?success=successfully created");
       }else {
          header("Location: ../index.php?error=unknown error occurred&$user_data");
       }
	}

}