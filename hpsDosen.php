<?php
    require "fungsi.php";

    $npp = decrypturl($_GET['id']);

    $q = "DELETE FROM dosen WHERE npp='".$npp."'";

    mysqli_query($koneksi,$q);
    header("Location:updateDosen.php");
?>