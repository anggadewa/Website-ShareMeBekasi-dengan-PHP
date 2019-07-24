<?php
require_once "../../core/init.php";

$id = $_GET['id_saran'];
$query = mysqli_query($link, "SELECT * FROM saran WHERE id_saran = '$id'");

while($h = mysqli_fetch_array($query)){

	mysqli_query($link, "UPDATE saran SET status = 'Aktif' WHERE id_saran = '$h[id_saran]' ");
	header("Location: ../laporan.php");
}
?>

