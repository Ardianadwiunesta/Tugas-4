<?php
require "fungsi.php";

if(isset($_POST['id'])) {
$id = $_POST["id"];
$npp= $_POST["npp"];
$namadosen = $_POST["namadosen"];
$homebase = $_POST["homebase"];

// if($numDosen == 0) {
    $sql = mysqli_query($koneksi, "UPDATE dosen SET namadosen = '$namadosen', homebase = '$homebase' WHERE npp = '$id'");
    header("location:updateDosen.php");
// } else {
//     echo "<script>
//           alert('NPP sudah ada')
//           javascript:history.go(-1)
//           </script>";
          
// }


} else {
    die("System Error");
}
?>