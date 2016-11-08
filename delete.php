<?php
// memanggil koneksi database
include_once("config.php");

$id = $_GET['id'];

//DELETE DATA USER BERDASARKAN ID
mysqli_query($mysqli, "DELETE FROM users WHERE id=$id");

//KALO UDAH DELETE BALIK KE INDEX.PHP
header("Location:index.php") ;

 ?>