<?php
    // include DB connection file
    include '../../../../../helper/connection.php';

    // mendapatkan nilai dari form
    $id_admin   = $_POST['id_admin'];
    $nama   = $_POST['nama'];
    $username      = $_POST['username'];
    $password      = $_POST['password'];
    
    if($password == ""){
        $query = "UPDATE admin SET nama = '$nama', username = '$username' WHERE id_admin = '$id_admin'";
    }else{
        $query = "UPDATE admin SET nama = '$nama', username = '$username', password = md5('$password') WHERE id_admin = '$id_admin'";
    }
    
    // menjalankan query isi data
    if (mysqli_query($con, $query))
    {
        header("Location:../table_user.php");
    }
    else
    {
        $error = urldecode("Data tidak berhasil diupdate");
        header("Location:../table_user.php?error=$error");
    }

    mysqli_close($con);
?>