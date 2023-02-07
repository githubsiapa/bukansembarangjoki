<?php
    include('../../../../helper/connection.php');

    $nama_user      = $_POST['nama_user'];
    $jk_user        = $_POST['jk_user'];
    $alamat_user      = $_POST['alamat_user'];
    $email_user      = $_POST['email_user'];
    $telp_user      = $_POST['telp_user'];

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "INSERT INTO user VALUES ('','$username','$email_user','$password','$nama','$telp_user','$alamat_user','$jk_user','')";

    // menjalankan query isi data
    if (mysqli_query($con, $query))
    {
        header("Location:../../../index.php");
    }
    else
    {
        echo "<script type='text/javascript'>
	    alert('Login Gagal!')
	    </script>";
        header("Location:../index.php");
    }

    mysqli_close($con);

?>