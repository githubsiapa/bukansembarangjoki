<?php
include '../../../../helper/connection.php';

// mendapatkan nilai id
$id_customer = $_GET['id_customer'];

$query = "SELECT * FROM user WHERE id_user = '$id_customer'";
$result = mysqli_query($con, $query);

$item = '';

if(mysqli_num_rows($result) == 1)
{
    $item = mysqli_fetch_assoc($result);
}

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
                                <h2 class="pageheader-title">Customer</h2>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Tables</a></li>
                                            <li class="breadcrumb-item"><a href="table_customer.php" class="breadcrumb-link">Data
                                                    Customer</a></li>
                                            <li class="breadcrumb-item active" aria-current="page"></li>Form Customer
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-12">
                        <div class="card">
                            <h5 class="card-header">Data Customer</h5>
                            <div class="card-body">
                                <form action="process/edit_customer.php" method="POST">

                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">ID Customer</label>
                                        <div class="col-md-9">
                                            <input type="hidden" name="id_user" class="form-control" value="<?php echo $id_customer ?>"
                                                readonly>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">Nama</label>
                                        <div class="col-md-9">
                                            <input type="text" name="nama" class="form-control" placeholder="Nama Customer"
                                                value="<?php echo $item['nama'] ?>" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">Jenis Kelamin</label>
                                        <div class="col-md-9">
                                            <div class="custom-control custom-radio">
                                                <input id="lakilaki" name="jk_user" type="radio" class="custom-control-input"
                                                    required="" value="Laki-Laki" <?php if($item['jk_user']=="Laki-Laki"
                                                    ) { echo "checked" ;} ?>>
                                                <label class="custom-control-label" for="lakilaki">Laki-Laki</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input id="perempuan" name="jk_user" type="radio" class="custom-control-input"
                                                    required="" value="Perempuan" <?php if($item['jk_user']=="Perempuan"
                                                    ) { echo "checked" ;} ?>>
                                                <label class="custom-control-label" for="perempuan">Perempuan</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">Alamat</label>
                                        <div class="col-md-9">
                                            <textarea name="alamat" id="" cols="30" rows="10" class="form-control"
                                                placeholder="Alamat Customer" required><?php echo $item['alamat'] ?></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">Email</label>
                                        <div class="col-md-9">
                                            <input type="email" name="email" class="form-control" placeholder="Email"
                                                value="<?php echo $item['email'] ?>" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">Nomor Telepon</label>
                                        <div class="col-md-9">
                                            <input type="number" name="telepon" class="form-control" placeholder="Nomor Telepon"
                                                value="<?php echo $item['telepon'] ?>" required>
                                        </div>
                                    </div>

                                    <div class="form-group row mt-5">
                                        <div class="col-md-6">
                                            <!-- back to home -->
                                            <a name="backBtn" id="backBtn" class="btn btn-dark btn-block btn-lg" href="table_customer.php"
                                                role="button">Kembali</a>
                                        </div>

                                        <div class="col-md-6">
                                            <!-- input button to submit form. Please check href attribute -->
                                            <input type="submit" class="btn btn-success btn-block btn-lg" value="Update" />
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

<?php } ?>