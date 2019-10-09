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
        <li role="presentation"><a href="index.php">Form Input Mahasiswa</a>
    </li>
        <li role="presentation" class="active"><a href="database.php">Lihat Database</a><br><br>
	<p><a href="input_ip_mahasiswa_ilkom.php">TAMBAH MAHASISWA(+)</a></p>
	<br>
	<table border="4px">
		<tr>
			<th>No.</th>
			<th>Nama Mahasiswa</th>
			<th>NIM</th>
			<th>Ip</th>
			<th>Edit</th>
		</tr>

		<?php
		include "koneksi.php";
		$no=1;
		$tampil = mysqli_query($conn, "SELECT * FROM input_mahasiswa_ilkom");
		while ($row = mysqli_fetch_array($tampil)){
			?>
			<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $row['nama_mahasiswa']; ?></td>
			<td><?php echo $row['nim']; ?></td>
			<td><?php echo $row['ip']; ?></td>
			<td><a href="ubah.php?Id_Mahasiswa=<?php echo $row['Id_Mahasiswa']; ?>">Ubah</a> 
				<a href="hapus.php?Id_Mahasiswa=<?php echo $row['Id_Mahasiswa']; ?>"
				onclick="return confirm('Anda yakin menghapus data ini')">Hapus</a></td>
			</tr>
		<?php	
		}
		?>
	</table>
    <p>
		<p>Total Mahasiswa : <?php echo mysqli_num_rows($tampil) ?></p>
	</li>
    </ul>
    </div>
<center>
    <div id="footer">
        Hak &copy; 2019 Oleh Rama Arnadin 
    </div>
    </div>
</center>
</html>
