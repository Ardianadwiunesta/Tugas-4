<?php
require "fungsi.php";

$id = decrypturl($_GET['idmatkul']);
$deleteMatkul = mysqli_query($koneksi, "DELETE FROM matkul WHERE idmatkul = '$id'");
if($deleteMatkul == TRUE) {
    header("Location: updateMatkul.php");
} else {
    die("Terjadi Kesalahan !");
}
?>