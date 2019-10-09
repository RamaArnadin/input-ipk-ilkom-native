<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Website Input IP Mahasiswa Ilkom</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" media="all" href="stylecss/css.css"/>
</head>
<body>
	<div id="layout">
		<div id="header">
		<img src="image/wifi-id.png" class="header"/>
        </div>
    </div>
    </div>
    <center>
    <div id="btn-header">
    <div class="btn-group">
        <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Admin<span class="caret"></span>
        </button>
        <ul class="dropdown-menu">
            <li><a href="#">Tentang Saya</a></li>
            <li><a href="#">Contact Person</a></li>
        </ul>
    </div>
    <div class="btn-group">
        <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Education<span class="caret"></span>
        </button>
        <ul class="dropdown-menu">
            <li><a href="#">Programming</a></li>
            <li><a href="#">Developer</a></li>
        </ul>
    </div>
            <div id="logout"> 
                <a href="#" class="btn btn-danger btn-sm">Log out</a>
            </div>
    </div>
    </center>
    <div id="body">
    <ul class="nav nav-tabs">
        <li role="presentation" class="active"><a href="">Form Input Mahasiswa</a>
        <form method="POST" action="">
        <h4>Form Input Ip Mahasiswa Ilmu komputer</h4>
	<table>
	<tr><td>Nama</td>
		<td>:</td>
		<td><input type="text" name="nama_mahasiswa"></td></tr><br>
	<tr><td>Nim</td>
		<td>:</td>
		<td><input type="text" name="nim"></td></tr>
	</table><br>
			<select name="mk1"><option>Grade MK1</option><option value="4">A</option><option value="3">B</option><option value="2">C</option><option value="1">D</option><option value="0">E</option><input type="text" name="sks1" placeholder="sks"><br></select>
			<select name="mk2"><option>Grade MK2</option><option value="4">A</option><option value="3">B</option><option value="2">C</option><option value="1">D</option><option value="0">E</option><input type="text" name="sks2" placeholder="sks"><br></select>
			<select name="mk3"><option>Grade MK3</option><option value="4">A</option><option value="3">B</option><option value="2">C</option><option value="1">D</option><option value="0">E</option><input type="text" name="sks3" placeholder="sks"><br></select>
			<select name="mk4"><option>Grade MK4</option><option value="4">A</option><option value="3">B</option><option value="2">C</option><option value="1">D</option><option value="0">E</option><input type="text" name="sks4" placeholder="sks"><br></select>
			<select name="mk5"><option>Grade MK5</option><option value="4">A</option><option value="3">B</option><option value="2">C</option><option value="1">D</option><option value="0">E</option><input type="text" name="sks5" placeholder="sks"><br></select>
			<select name="mk6"><option>Grade MK6</option><option value="4">A</option><option value="3">B</option><option value="2">C</option><option value="1">D</option><option value="0">E</option><input type="text" name="sks6" placeholder="sks"><br></select>
			<select name="mk7"><option>Grade MK7</option><option value="4">A</option><option value="3">B</option><option value="2">C</option><option value="1">D</option><option value="0">E</option><input type="text" name="sks7" placeholder="sks"><br></select>
			<select name="mk8"><option>Grade MK8</option><option value="4">A</option><option value="3">B</option><option value="2">C</option><option value="1">D</option><option value="0">E</option><input type="text" name="sks8" placeholder="sks"><br></select>
			<input type="submit" name="proses" value="Proses & Simpan"><input type="reset" name="reset" value="Reset"><br><br>
	</form>

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
        if(isset($_POST['proses'])){
        echo "Nama : ". $nama_mahasiswa. "<br>";
        echo "Nim  : ". $nim. "<br>";
        echo "Total Nilai : $nilai1 + $nilai2 + $nilai3 + $nilai4 + $nilai5 + $nilai6 + $nilai7 + $nilai8 = ". $tn. "<br>";
        echo "Total Sks : $sks1 + $sks2 + $sks3 + $sks4 + $sks5 + $sks6 + $sks7 + $sks8 = ". $ts. "<br><br>";
        echo "Index Prestasi = ". round($ip, 2). "<br><br>";

        include "koneksi.php";
        $sql = "INSERT INTO input_mahasiswa_ilkom (nama_mahasiswa, nim, ip) VALUES ('$nama_mahasiswa', '$nim', '$ip')";
        $tampil = mysqli_query($conn, $sql);
        if($tampil){
            echo "Data Berhasil di Simpan !!!";
        }
        else{
            echo "Data Gagal di Simpan";
            }
        }
        ?>
    </li>
        <li role="presentation"><a href="database.php">Lihat Database</a></li>
    </ul>
    </div>
<center>
    <div id="footer">
        Hak &copy; 2019 Rama Arnadin
    </div>
    </div>
</center>
</html>
