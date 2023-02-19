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
                                <h2 class="pageheader-title">Kategori</h2>

                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Tables</a></li>
                                            <li class="breadcrumb-item"><a href="table_kategori.php" class="breadcrumb-link">Data
                                                    Kategori</a></li>
                                            <li class="breadcrumb-item active" aria-current="page"></li>Form Kategori
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-12">
                        <div class="card">
                            <h5 class="card-header">Data Kategori</h5>
                            <div class="card-body">
                                <form action="process/add_kategori.php" method="POST">

                                    <?php 
                                    $tampilkan_isi = "select count(id_kategori) as jumlah from kategori;";
                                    $tampilkan_isi_sql = mysqli_query($con,$tampilkan_isi);
                                    $no = 1;
                                
                                    while ($isi = mysqli_fetch_array($tampilkan_isi_sql))
                                    {
                                    $jumlah = $isi['jumlah'];
                                    ?>

                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">ID Kategori</label>
                                        <div class="col-md-9">
                                            <input type="text" name="id_kategori" class="form-control" value="<?php echo $no+$jumlah ?>"
                                                readonly>
                                        </div>
                                    </div>

                                    <?php } ?>

                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">Nama Kategori</label>
                                        <div class="col-md-9">
                                            <input type="text" name="nama_kategori" class="form-control" placeholder="Nama Kategori"
                                                required>
                                        </div>
                                    </div>

                                    <div class="form-group row mt-5">
                                        <div class="col-md-6">
                                            <!-- back to home -->
                                            <a name="backBtn" id="backBtn" class="btn btn-dark btn-block btn-lg" href="table_kategori.php"
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
        $('.list3').addClass('active');
    });
    </script>

<?php } ?>