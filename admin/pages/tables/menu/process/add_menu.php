<?php
    // include DB connection file
    include '../../../../../helper/connection.php';

    // mendapatkan nilai dari form
    $nama_produk    = $_POST['nama_produk'];
    $id_kategori    = $_POST['id_kategori'];
    $stok           = $_POST['stok'];
    $harga_produk   = $_POST['harga_produk'];
    $foto_produk    = $_POST['foto_produk'];
    $deskripsi      = $_POST['deskripsi'];

    $nama_folder    = "images";
    $nama_file      = $_FILES["foto_produk"]["name"];
    $tmp            = $_FILES["foto_produk"]["tmp_name"];
    $path           = "../../../../assets/$nama_folder/$nama_file";
    $tipe_file      = array("image/jpeg","image/png","image/jpg");

    $query = "INSERT INTO produk VALUES ('','$nama_produk','$harga_produk','$stok','$nama_file','$deskripsi','0','$id_kategori')";

    if(!in_array($_FILES["foto_produk"]["type"],$tipe_file) && $nama_file != "")
    {
        $error = urldecode("Cek kembali ekstensi file anda (*.jpg,*.gif,*.png)");
        header("Location:../table_menu.php?error=$error");
    }
    else if(in_array($_FILES["foto_produk"]["type"],$tipe_file) && $nama_file != "")
    {
        if (mysqli_query($con, $query))
        {
            move_uploaded_file($tmp,$path);
            header("Location:../table_menu.php");
            
        }
        else
        {
            $error = urldecode("Data tidak berhasil ditambahkan");
            header("Location:../table_menu.php?error=$error");
        }
    mysqli_close($con);
    }
?>