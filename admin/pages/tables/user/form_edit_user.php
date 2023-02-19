<?php
include '../../../../helper/connection.php';

// mendapatkan nilai id
$id_admin = $_GET['id_admin'];

$query = "select * from admin where id_admin='$id_admin'";
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
                                <h2 class="pageheader-title">Admin</h2>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Tables</a></li>
                                            <li class="breadcrumb-item"><a href="table_user.php" class="breadcrumb-link">Data
                                                    Admin</a></li>
                                            <li class="breadcrumb-item active" aria-current="page"></li>Form Admin
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-12">
                        <div class="card">
                            <h5 class="card-header">Data Admin</h5>
                            <div class="card-body">
                                <form action="process/edit_user.php" method="POST" enctype="multipart/form-data">

                                    <input type="hidden" name="id_admin" value="<?php echo $id_admin?>">

                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">Name</label>
                                        <div class="col-md-9">
                                            <input type="text" name="nama" class="form-control" value="<?php echo $item['nama']; ?>"
                                                value="<?php echo $item['nama']; ?>" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">Username</label>
                                        <div class="col-md-9">
                                            <input type="text" name="username" class="form-control" placeholder="Masukkan Username"
                                                value="<?php echo $item['username']; ?>" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">Password</label>
                                        <div class="col-md-9">
                                            <input type="password" name="password" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group row mt-5">
                                        <div class="col-md-6">
                                            <!-- back to home -->
                                            <a name="backBtn" id="backBtn" class="btn btn-dark btn-block btn-lg" href="table_user.php"
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

    <script>
    $(document).ready(function(){
        $('.list7').addClass('active');
    });
    </script>
<?php } ?>