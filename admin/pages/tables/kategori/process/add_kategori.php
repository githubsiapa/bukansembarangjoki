<?php
    // include DB connection file
    include '../../../../../helper/connection.php';

    // mendapatkan nilai dari form
    $id_kategori     = $_POST['id_kategori'];
    $nama_kategori    = $_POST['nama_kategori'];

    $query = "INSERT INTO kategori VALUES ('$id_kategori','$nama_kategori')";

    // menjalankan query isi data
    if (mysqli_query($con, $query))
    {
        header("Location:../table_kategori.php");
    }
    else
    {
        $error = urldecode("Data tidak berhasil ditambahkan");
        header("Location:../table_kategori.php?error=$error");
    }

    mysqli_close($con);
?>