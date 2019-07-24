<?php
require_once "../../core/init.php";


$id = $_GET['id_saran'];
mysqli_query($link,"DELETE FROM instansi WHERE id_saran='$id' ");
header("Location: ../laporan.php");

?>
