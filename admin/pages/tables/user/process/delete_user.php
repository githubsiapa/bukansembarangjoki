<?php
    // include DB connection file
    include '../../../../../helper/connection.php';

    // mendapatkan nilai dari form
    $id_admin = $_GET['id_admin'];

    $query = "DELETE FROM admin WHERE id_admin = '$id_admin'";

    // menjalankan query isi data
    if (mysqli_query($con, $query))
    {
        header("Location:../table_user.php");
    }
    else
    {
        $error = urldecode("Data tidak berhasil dihapus");
        header("Location:../table_user.php?error=$error");
    }

    mysqli_close($con);
?>