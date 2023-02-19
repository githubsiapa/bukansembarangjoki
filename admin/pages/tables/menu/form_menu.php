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
                                            <li class="breadcrumb-item"><a href="table_kategori.php" class="breadcrumb-link">Data
                                                    Menu</a></li>
                                            <li class="breadcrumb-item active" aria-current="page"></li>Form Menu
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
                                <form action="process/add_menu.php" method="POST" enctype="multipart/form-data">

                                    <?php 
                                    //$tampilkan_isi = "select count(id_buku) as jumlah from buku;";
                                    //$tampilkan_isi_sql = mysqli_query($con,$tampilkan_isi);
                                    //$no = 1;
                                
                                    //while ($isi = mysqli_fetch_array($tampilkan_isi_sql))
                                    //{
                                    //$jumlah = $isi['jumlah'];
                                    ?>
                                    <!--
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">ID Buku</label>
                                        <div class="col-md-9">
                                            <input type="text" name="id_buku" class="form-control" value="BU-<?php echo $no+$jumlah ?>"
                                                readonly>
                                        </div>
                                    </div>
                                    -->
                                    <?php //} ?>

                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">Nama Produk</label>
                                        <div class="col-md-9">
                                            <input type="text" name="nama_produk" class="form-control" placeholder="Nama Produk"
                                                required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">Kategori</label>
                                        <div class="col-md-9">
                                            <select required name="id_kategori" class="form-control">
                                                <option value="" disabled selected>Pilih Kategori</option>
                                                <?php 
                                                $tampilkan_isi = "select * from kategori";
                                                $tampilkan_isi_sql = mysqli_query($con,$tampilkan_isi);
                                                $no = 1;
                                            
                                                while ($isi = mysqli_fetch_array($tampilkan_isi_sql))
                                                {
                                                    echo "<option value='".$isi['id_kategori']."'>".$isi['nama_kategori']."</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">Stok</label>
                                        <div class="col-md-9">
                                            <input type="number" name="stok" class="form-control" placeholder="Stok"
                                                required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">Harga</label>
                                        <div class="col-md-9">
                                            <input type="number" name="harga_produk" class="form-control" placeholder="Harga"
                                                required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">Deskripsi (Optional)</label>
                                        <div class="col-md-9">
                                            <textarea name="deskripsi" cols="30" rows="10" class="form-control"
                                                placeholder="Deskripsi Menu" required></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">Foto Menu</label>
                                        <div class="col-md-9">
                                            <input type="file" name="foto_produk" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="form-group row mt-5">
                                        <div class="col-md-6">
                                            <!-- back to home -->
                                            <a name="backBtn" id="backBtn" class="btn btn-dark btn-block btn-lg" href="table_menu.php"
                                                role="button">Kembali</a>
                                        </div>

                                        <div class="col-md-6">
                                            <!-- input button to submit form. Please check href attribute -->
                                            <input type="submit" class="btn btn-success btn-block btn-lg" value="Tambah" />
                                        </div>
                                    </div>
                                </form>
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