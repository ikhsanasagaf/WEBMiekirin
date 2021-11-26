<?php
    include "db.php";
    $id = $_GET['id_menu'];
    $ambildata = mysqli_query($koneksi, "DELETE FROM menu WHERE id_menu = '$id'");
    
    echo "<meta http-equiv='refresh' content='1; url=http://localhost/webproyek/datamenu.php'>";
?>
