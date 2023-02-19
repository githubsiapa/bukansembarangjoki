<?php
    // include DB connection file
    include '../../../../../helper/connection.php';

    // mendapatkan nilai dari form
    $id_produk = $_GET['id_produk'];

    $query = "DELETE FROM produk  WHERE id_produk = '$id_produk'";

    // menjalankan query isi data
    if (mysqli_query($con, $query))
    {
        header("Location:../table_menu.php");
    }
    else
    {
        $error = urldecode("Data tidak berhasil dihapus");
        header("Location:../table_menu.php?error=$error");
    }

    mysqli_close($con);
?>