<?php
include "koneksi.php";

$id_mahasiswa = $_GET['Id_Mahasiswa'];
mysqli_query($conn, "DELETE FROM input_mahasiswa_ilkom WHERE Id_Mahasiswa='$id_mahasiswa'");
header("location:database.php");
?>