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
                                            <li class="breadcrumb-item active" aria-current="page">Data Kategori</li>
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
                                <a href="form_kategori.php" class="btn btn-primary">Tambah Data</a>
                                <?php
                                $message = '';
                                if(isset($_GET["error"]))
                                {
                                    $message = $_GET["error"];
                                    echo "<br><br>
                                    <p style='color:red; font-style:italic'>$message</p>";
                                }
                                ?>
                                <table id="tabell" class="table table-striped mt-3">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nama Kategori</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                            $query = "SELECT * FROM kategori";
                                            
                                            $result = mysqli_query($con, $query);

                                            if (mysqli_num_rows($result) > 0)
                                            {
                                                $index = 1;

                                                while($row = mysqli_fetch_assoc($result))
                                                {
                                                    $id_kategori = $row['id_kategori'];
                                                    echo "
                                                    <tr>
                                                        <td>" . $index++ . "</td>
                                                        <td>" . $row["nama_kategori"]  . "</td>
                                                        <td>
                                                            <a href='form_edit_kategori.php?id_kategori=$id_kategori' class='btn btn-warning'>Update</a>
                                                            <a href='process/delete_kategori.php?id_kategori=$id_kategori' class='btn btn-danger'>Delete</a>
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
        $('.list3').addClass('active');
    });
    </script>
<?php } ?>