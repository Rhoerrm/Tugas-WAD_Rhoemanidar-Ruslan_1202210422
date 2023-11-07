<?php  

include "db_conn.php";

$sql = "SELECT * FROM atk_palem ORDER BY id_pelanggan DESC";
$result = mysqli_query($conn, $sql);


?>