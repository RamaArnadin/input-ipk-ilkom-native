<?php
include "koneksi.php";
$id_mahasiswa = $_GET['Id_Mahasiswa'];
$sql = "SELECT * FROM input_mahasiswa_ilkom WHERE Id_Mahasiswa='$id_mahasiswa'";
$tampil = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($tampil);
?>
<html>
<body>
	<p><a href="database.php">[Lihat_Database]</a></p>
	<form method="POST" action="">
		<table>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama_mahasiswa" value="<?php echo $row['nama_mahasiswa']; ?>"></td>
			</tr>
			<tr>
				<td>Nim</td>
				<td>:</td>
				<td><input type="text" name="nim" value="<?php echo $row['nim']; ?>"></td>
			</tr>
		</table><br>
			<select name="mk1"><option>Grade MK1</option><option value="4">A</option><option value="3">B</option><option value="2">C</option><option value="1">D</option><option value="0">E</option></select><input type="text" name="sks1" placeholder="sks"><br></select>
			<select name="mk2"><option>Grade MK2</option><option value="4">A</option><option value="3">B</option><option value="2">C</option><option value="1">D</option><option value="0">E</option><input type="text" name="sks2" placeholder="sks"><br></select>
			<select name="mk3"><option>Grade MK3</option><option value="4">A</option><option value="3">B</option><option value="2">C</option><option value="1">D</option><option value="0">E</option><input type="text" name="sks3" placeholder="sks"><br></select>
			<select name="mk4"><option>Grade MK4</option><option value="4">A</option><option value="3">B</option><option value="2">C</option><option value="1">D</option><option value="0">E</option><input type="text" name="sks4" placeholder="sks"><br></select>
			<select name="mk5"><option>Grade MK5</option><option value="4">A</option><option value="3">B</option><option value="2">C</option><option value="1">D</option><option value="0">E</option><input type="text" name="sks5" placeholder="sks"><br></select>
			<select name="mk6"><option>Grade MK6</option><option value="4">A</option><option value="3">B</option><option value="2">C</option><option value="1">D</option><option value="0">E</option><input type="text" name="sks6" placeholder="sks"><br></select>
			<select name="mk7"><option>Grade MK7</option><option value="4">A</option><option value="3">B</option><option value="2">C</option><option value="1">D</option><option value="0">E</option><input type="text" name="sks7" placeholder="sks"><br></select>
			<select name="mk8"><option>Grade MK8</option><option value="4">A</option><option value="3">B</option><option value="2">C</option><option value="1">D</option><option value="0">E</option><input type="text" name="sks8" placeholder="sks"><br></select>
			<input type="submit" name="simpan" value="Simpan Perubahan">
	</form>
</body>
</html>

<?php
error_reporting(0);
$nama_mahasiswa = $_POST['nama_mahasiswa'];
$nim = $_POST['nim'];
$ip = $_POST['ip'];

$sks1 = $_POST['sks1'];
$sks2 = $_POST['sks2'];
$sks3 = $_POST['sks3'];
$sks4 = $_POST['sks4'];
$sks5 = $_POST['sks5'];
$sks6 = $_POST['sks6'];
$sks7 = $_POST['sks7'];
$sks8 = $_POST['sks8'];

$mk1 = $_POST['mk1'];
$mk2 = $_POST['mk2'];
$mk3 = $_POST['mk3'];
$mk4 = $_POST['mk4'];
$mk5 = $_POST['mk5'];
$mk6 = $_POST['mk6'];
$mk7 = $_POST['mk7'];
$mk8 = $_POST['mk8'];

$nilai1 = $mk1*$sks1;
$nilai2 = $mk2*$sks2;
$nilai3 = $mk3*$sks3;
$nilai4 = $mk4*$sks4;
$nilai5 = $mk5*$sks5;
$nilai6 = $mk6*$sks6;
$nilai7 = $mk7*$sks7;
$nilai8 = $mk8*$sks8;

$tn=$nilai1+$nilai2+$nilai3+$nilai4+$nilai5+$nilai6+$nilai7+$nilai8;
$ts=$sks1+$sks2+$sks3+$sks4+$sks5+$sks6+$sks7+$sks8;
$ip=$tn/$ts;
?>

<?php
if(isset($_POST['simpan'])){
echo "Nama : ". $nama_mahasiswa. "<br>";
echo "Nim  : ". $nim. "<br>";
echo "Total Nilai : $nilai1 + $nilai2 + $nilai3 + $nilai4 + $nilai5 + $nilai6 + $nilai7 + $nilai8 = ". $tn. "<br>";
echo "Total Sks : $sks1 + $sks2 + $sks3 + $sks4 + $sks5 + $sks6 + $sks7 + $sks8 = ". $ts. "<br><br>";
echo "Index Prestasi = ". round($ip, 2). "<br><br>";

include "koneksi.php";
$update = "UPDATE input_mahasiswa_ilkom SET nama_mahasiswa='$nama_mahasiswa', nim='$nim', ip='$ip' WHERE Id_Mahasiswa='$id_mahasiswa'";
$ambil = mysqli_query($conn, $update);
if($ambil){
	echo "Data Berhasil di ubah";
}
else{
	echo "Kesalahan edit data". $update;
}
}
mysqli_close($conn);
?>