<!DOCTYPE html>
<html>
    <head>
        <title>Sistem Informasi Akademik::Edit Data Dosen</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="bootstrap4/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/styleku.css">
        <script src="bootstrap4/jquery/3.3.1/jquery-3.3.1.js"></script>
        <script src="bootstrap4/js/bootstrap.js"></script>
    
    </head>
    <body>
    <?php
	require "fungsi.php";
	require "head.html";
	$npp=decrypturl($_GET['id']);
	$sql="select * from dosen where npp='$npp'";
	$qry=mysqli_query($koneksi,$sql);
	$row=mysqli_fetch_object($qry);
	?>
        <div class="utama">		
		<br><br><br>		
		<h3>Edit DATA MAHASISWA</h3>
		<div class="alert alert-success alert-dismissible" id="success" style="display:none;">
	  		<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
		</div>	
		<form method="post" action="sv_editDsn.php" enctype="multipart/form-data">
			<div class="form-group">
				<label for="nim">NPP:</label>
				<input class="form-control" type="text" name="npp" id="npp" value="<?php echo $row->npp ?>" disabled>
			</div>
			<div class="form-group">
				<label for="nama">Nama Dosen:</label>
				<input class="form-control" type="text" name="namadosen" id="namadosen"  value="<?php echo $row->namadosen ?>">
			</div>
			<div class="form-group">
				<label for="email">Homebase:</label>
				<select class="form-control" type="text" name="homebase" id="homebase">
                <?php
                $arrhobe=array('A11','A12','A13','A14','A15','A16','A17','A22','A24','P31');
                foreach($arrhobe as $hb)
                {
                    if ($hb==$row->homebase)
                    {
                        echo "<option value=$hb selected>$hb";
                    }else{

                        echo "<option value=$hb>$hb";
                    }
                }
                ?>
                </select>
            </div>
            <div>
                <button class="btn btn-primary" type="submit" id="submit">Simpan</button>
            </div>
            <input type="hidden" name="id" id="id" value="<?php echo $npp; ?>">
		</form>
	</div>
    </body>
    </html>