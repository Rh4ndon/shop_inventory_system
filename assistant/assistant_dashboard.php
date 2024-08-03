<?php 
include('../controllers/session.php');
@include '../models/dbcon.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Assistant</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="assistant_dashboard.php">
                <img src="../img/egay.jpg" height="200%">
                <div class="sidebar-brand-text mx-3">Egay’s Enterprises</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="assistant_dashboard.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

           <!-- Sidebar Toggler (Sidebar) -->
           <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
            

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                   

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <?php
                         $query_notification = mysqli_query($conn,"SELECT * FROM products WHERE quantity = 5 or quantity = 10 ") or die(mysqli_error());
                         $notif_count = mysqli_num_rows($query_notification );
                                             
                        ?>

                         <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter"><?= $notif_count ?></span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                        <?php
                         $query_alerts= mysqli_query($conn,"SELECT * FROM products WHERE quantity = 5 or quantity = 10 ") or die(mysqli_error()); 
                         while($row = mysqli_fetch_array($query_alerts)){
                         ?>

                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold"><?= $row['product_name'] ?> from <?= $row['product_brand'] ?> is running low only has <?= $row['quantity'] ?> on stock</span>
                                    </div>
                                </a>
                                
                        <?php } ?>
                                <a class="dropdown-item text-center small text-gray-500" href="#"></a>
                            </div>
                        </li>


                    

                       
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Assistant Page</span>
                                <img class="img-profile rounded-circle"
                                    src="../img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">


                
                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Assistant Page</h1>


                                
                    <!-- Basic Card Example -->
                    <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Add Product</h6>
                                </div>
                                <div class="card-body">
                                <form method="post" action="../controllers/transactions.php">
                                <div class="form-group row">
                                
                                <div class="col-sm-4">
                                    
                                    <input class="form-control form-control-user" name="product_name" type="text" placeholder="Product Name" required>
                                </div>
                                <div class="col-sm-4">
                                    <input class="form-control form-control-user" name="product_brand" type="text" placeholder="Product Brand" required>
                                </div>
                                <div class="col-sm-4">
                                    <input class="form-control form-control-user" name="supplier" type="text" placeholder="Supplier Name" required>
                                </div>
                               
                                </div>
                                <div class="form-group row">
                                <div class="col-sm-4">
                                    <input class="form-control form-control-user" name="quantity" type="number" min="1" max="99999"placeholder="Quantity" required>
                                </div>
                                <div class="col-sm-4">
                                    <input class="form-control form-control-user" name="rprice" type="number" min="1" max="99999"placeholder="Retail Price" required>
                                </div>
                                <div class="col-sm-4">
                                    <input class="form-control form-control-user" name="price" type="number" min="1" max="99999"placeholder="Market price" required>
                                </div>
                                
                                </div>
                                <div class="form-group row"></div>
                                <div class="col-sm-4">
                                <button type="submit" name="add" class="btn btn-primary btn-user btn-block">Add</button>
                                </div>
                                </form>
                                </div>
                    </div>





                     <!-- DataTales Example -->
                     <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Inventory</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Product Name</th>
                                            <th>Product Brand</th>
                                            <th>Quantity</th>
                                            <th>Retail Price</th>
                                            <th>Market Price</th>
                                            <th>Supplier Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                 
                                    <tbody>
                            <?php
                            
	                        $query = mysqli_query($conn,"select * from products order by supplier asc") or die(mysqli_error());
	                        while ($row = mysqli_fetch_array($query)) {
		                    
		                    ?>
                            
                                        <tr>
                                            <td><?php echo $row['product_name']; ?></td>
                                            <td><?php echo $row['product_brand']; ?></td>
                                            <td><?php echo $row['quantity']; ?></td>
                                            <td>&#8369; <?php echo $row['retail_price']; ?></td>
                                            <td>&#8369; <?php echo $row['price']; ?></td>
                                            <td><?php echo $row['supplier']; ?></td>
                                            <td>
                                            <form method="post" action="../controllers/transactions.php">
                                            <input type="hidden" name="del_id" value="<?php echo $row['id']; ?>">
                                            <button name="edit" type="submit" class="btn btn-primary btn-icon-split">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-flag"></i>
                                                </span>
                                                <span class="text">Edit</span>
                                            </button>
                                            <button name="delete" type="submit" class="btn btn-danger btn-circle" >
                                                <i class="fas fa-trash"></i>
                                            </button>
                                            </form>
    
                                            </td>                                      
                                        </tr>
                            
                                        
                                  <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                   

    








                    




                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Returned Products Due to Damage</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Product Name</th>
                                            <th>Product Brand</th>
                                            <th>Quantity</th>
                                            <th>Retail Price</th>
                                            <th>Market Price</th>
                                            <th>Date</th>  
                                            <th>Reason</th>                                      
                                           
                                        </tr>
                                    </thead>
                                 
                                    <tbody>
                                  
                            <?php
                            
	                        $query_damage = mysqli_query($conn,"select * from orders where status = 'Damaged'") or die(mysqli_error());
	                        while ($row_damaged = mysqli_fetch_array($query_damage)) {
                            $price = $row_damaged['price'];
                            $retail = $row_damaged['retail_price'];
                            $qnt = $row_damaged['quantity'];
                            $profit = ($price - $retail)* $qnt;
                            $stat = $row_damaged['status'];
                        

                            
		                    ?>
                                        <tr>
                                            <td><?php echo $row_damaged['product_name']; ?></td>
                                            <td><?php echo $row_damaged['product_brand']; ?></td>
                                            <td><?php echo $row_damaged['quantity']; ?></td>
                                            <td>&#8369; <?php echo $row_damaged['price']; ?></td>
                                            <td>&#8369; <?php echo $profit; ?></td>
                                            <td><?php echo $row_damaged['day']; ?></td>
                                            <td><?php echo $row_damaged['status']; ?></td>
                                      
                                        </tr>
                                    
                                  <?php } ?>
                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>





                    





                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; ISU San Mateo Student 2023</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="../controllers/logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    
    
    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/datatables-demo.js"></script>

</body>

</html>