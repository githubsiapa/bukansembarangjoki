<?php
include '../../../../helper/connection.php';
?>

<?php 
session_start();
if(!$_SESSION['username'] && !$_SESSION['password'] && $_SESSION['role'] != "admin")
{
    echo "
		<script type='text/javascript'>
		alert('Anda harus login terlebih dahulu!')
		window.location='../../../index.php';
		</script>";
}
else
{
    include '../template.php';
?>
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Menu</h2>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Tables</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Data Menu</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-12">
                        <div class="card">
                            <h5 class="card-header">Data Menu</h5>
                            <div class="card-body">
                                <a href="form_menu.php" class="btn btn-primary">Tambah Data</a>
                                <?php
                                $message = '';
                                if(isset($_GET["error"]))
                                {
                                    $message = $_GET["error"];
                                    echo "<br><br>
                                    <p style='color:red; font-style:italic'>$message</p>";
                                }
                                ?>
                                <br><br>
                                <table id="tabell" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nama Menu</th>
                                            <th>ID Menu</th>
                                            <th>Harga</th>
                                            <th>Stok</th>
                                            <th>likes</th>
                                            <th>Nama Kategori</th>
                                            <th>Gambar</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on'? "https://" : "http://";
                                            
                                            $query = 
                                            "SELECT p.* , k.nama_kategori FROM produk p INNER JOIN kategori k ON p.id_kategori = k.id_kategori";
                                            
                                            $result = mysqli_query($con, $query);
                                             
                                            if (mysqli_num_rows($result) > 0)
                                            {
                                                $index = 1;

                                                while($row = mysqli_fetch_assoc($result))
                                                {
                                                    $id_produk = $row['id_produk'];
                                                   
                                                    echo "
                                                    <tr>
                                                        <td>" . $index++ . "</td>
                                                        <td>" . $row["nama_produk"] . "</td>
                                                        <td>" . $row["id_produk"] . "</td>
                                                        <td>" . $row["harga_produk"] . "</td>
                                                        <td>" . $row["stok"] . "</td>
                                                        <td>" . $row["likes"] . "</td>
                                                        <td>" . $row["nama_kategori"] . "</td>
                                                        <td><a class='zoom bg-primary text-white btn-sm' href='".$protocol.$_SERVER['HTTP_HOST']."/toko_buku/admin/assets/images/".$row["foto_produk"] ."'>Lihat Foto</a></td>
                                                        <td>
                                                            <a href='form_edit_menu.php?id_produk=$id_produk' class='btn btn-warning'>Update</a>
                                                            <a href='process/delete_menu.php?id_produk=$id_produk' class='btn btn-danger'>Delete</a>
                                                        </td>
                                                    </tr>
                                                    ";
                                                }
                                            }

                                            mysqli_close($con);
                                            ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            Copyright © 2022 Kencana Media All rights reserved.
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->

    <script>
    $(document).ready(function(){
        $('.list1').addClass('active');
    });
    </script>
<?php } ?>