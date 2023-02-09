<?php
    // include DB connection file
    include '../../../../../helper/connection.php';

    // mendapatkan nilai dari form
    $nama        = $_POST['nama'];
    $username      = $_POST['username'];
    $password      = md5($_POST['password']);
    $jk_user        = $_POST['jk_user'];
    $alamat      = $_POST['alamat'];
    $email      = $_POST['email'];
    $telepon      = $_POST['telepon'];

    $query = "INSERT INTO user VALUES ('','$username','$email','$password','$nama','$telepon','$alamat','$jk_user','')";

    // menjalankan query isi data
    if (mysqli_query($con, $query))
    {
        header("Location:../table_customer.php");
    }
    else
    {
        $error = urldecode("Data tidak berhasil ditambahkan");
        header("Location:../table_customer.php?error=$error");
    }

    mysqli_close($con);
?>