<?php 
require '../dbconnect.php';
$hapus = mysqli_query($conn, "DELETE FROM tambah_produk WHERE id_produk='".$_GET['id']."' ");
if($hapus){
    header('location:tables.php');
} else{
    echo"ada yang salah coba dicek";
}
?>