<?php
    // include DB connection file
    include '../../../../../helper/connection.php';

    // mendapatkan nilai dari form
    $id_user     = $_POST['id_user'];
    $nama    = $_POST['nama'];
    $jk_user    = $_POST['jk_user'];
    $alamat    = $_POST['alamat'];
    $email    = $_POST['email'];
    $telepon    = $_POST['telepon'];

    $query = "UPDATE user SET nama = '$nama', jk_user = '$jk_user', alamat = '$alamat', email = '$email', telepon = '$telepon' WHERE id_user = '$id_user'";

    // menjalankan query isi data
    if (mysqli_query($con, $query))
    {
        header("Location:../table_customer.php");
    }
    else
    {
        $error = urldecode("Data tidak berhasil diupdate");
        header("Location:../table_customer.php?error=$error");
    }

    mysqli_close($con);
?>