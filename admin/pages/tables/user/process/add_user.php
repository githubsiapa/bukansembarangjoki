<?php
    // include DB connection file
    include '../../../../../helper/connection.php';

    // mendapatkan nilai dari form
    $nama       = $_POST['nama'];
    $username    = $_POST['username'];
    $password      = md5($_POST['password']);

    $query = "INSERT INTO admin VALUES ('','$nama','$username','$password')";

    // menjalankan query isi data
    if (mysqli_query($con, $query))
    {
        header("Location:../table_user.php");
    }
    else
    {
        $error = urldecode("Data tidak berhasil ditambahkan");
        header("Location:../table_user.php?error=$error");
    }

    mysqli_close($con);
?>