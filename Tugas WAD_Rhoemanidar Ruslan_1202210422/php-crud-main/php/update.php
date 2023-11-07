<?php 

if (isset($_GET['id'])) {
	include "db_conn.php";

	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$id_pelanggan = validate($_GET['id']);

	$sql = "SELECT * FROM atk_palem WHERE id_pelanggan=$id_pelanggan";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    	$row = mysqli_fetch_assoc($result);
    }else {
    	header("Location: read.php");
    }


}else if(isset($_POST['update'])){
    include "../db_conn.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$name = validate($_POST['name']);
	$email = validate($_POST['email']);
        $alamat = validate($_POST['alamat']);
        $telepon = validate($_POST['telepon']);
        $barang = validate($_POST['barang']);
        $tanggal_lahir = validate($_POST['tanggal_lahir']);
	$id_pelanggan = validate($_POST['id']);

	if (empty($name)) {
		header("Location: ../update.php?id_pelanggan=$id_pelanggan&error=iname is required");
	}else if (empty($email)) {
		header("Location: ../update.php?id_pelanggan=$id_pelanggan&error=email is required");
	}else if (empty($alamat)) {
		header("Location: ../update.php?id_pelanggan=$id_pelanggan&error=alamat is required");
        }else if (empty($telepon)) {
                header("Location: ../update.php?id_pelanggan=$id_pelanggan&error=telepon is required");
        }else if (empty($barang)) {
		header("Location: ../update.php?id_pelanggan=$id_pelanggan&error=barang is required");
        }else if (empty($tanggal_lahir)) {
		header("Location: ../update.php?id=$id&error=Tanggal_lahir is required");
        }else {

       $sql = "UPDATE atk_palem
               SET name='$name', email='$email', alamat='$alamat', telepon='$telepon', barang='$barang', tanggal_lahir='$tanggal_lahir'
               WHERE id_pelanggan=$id_pelanggan ";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: ../read.php?success=successfully updated");
       }else {
          header("Location: ../update.php?id=$id&error=unknown error occurred&$user_data");
       }
	}
}else {
	header("Location: read.php");
}