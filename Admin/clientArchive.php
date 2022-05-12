<?php

    require_once('../config.php'); 
    require_once('../logsession.php'); 
    if ($logged==false) {
         header("Location:../index.php");
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Client Archives</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="../images/favicon1.png">
</head>

<body id="page-top" style="color: #000000">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">KloudNet<br><sup>ICT Solutions</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>ADMIN</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="index"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fas fa-users"></i>
                    <span>Client </span>
                </a>
                 <a class="nav-link collapsed" href="billing"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-dollar-sign"></i>
                    <span>Billing</span>
                </a>

                 <a class="nav-link collapsed" href="process"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-clipboard-check"></i>
                    <span>Reports</span>
                </a>

                 <a class="nav-link collapsed" href="Subscriptions"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-clipboard-list"></i>
                    <span>Subscription Plans</span>
                </a>

                <a class="nav-link collapsed" href="complaints"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-envelope-open"></i>
                    <span>Complaints</span>
                </a>

                <a class="nav-link collapsed" href="requests"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-exclamation-triangle"></i>
                    <span>Fibr Upgrade/Cut Request</span>
                </a>

                <a class="nav-link collapsed" data-toggle="modal" href="#" data-target="#logoutModal" 
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Logout</span>
                </a>

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

  



                        <div class="topbar-divider d-none d-sm-block"></div>

  

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
            <a class="btn btn-primary " href="index.php"  style=" margin: 5px; float: right;">Return</a> 
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800" style="color: black;">ARCHIVES</h1>
                    </div>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Client Archives</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="color: black;">
                                    <thead>
                               <tr>  
                                    <th>ID</th>
                                    <th>Full Name</th>  
                                    <th>Email</th>  
                                    <th>Contact</th>  
                                    <th>Address</th>  
                                     <th>Monthly Bill</th> 
                                     <th>Status</th>
                                     <th></th>
                                     <th></th>

                               </tr>  
                                    </thead>
    <?php
include 'mycon.php';

$result = mysqli_query($connection,"SELECT * FROM user WHERE hideNum ='1' ");


while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['firstName'] . " " . $row['middleName'] . " " . $row['lastName'] . "</td>";
  echo "<td>" . $row['email'] . "</td>";
  echo "<td>" . $row['number'] . "</td>";
  echo "<td>" . $row['addr'] . "</td>";
  echo "<td>" . $row['bill'] . "</td>";
  echo "<td>" . $row['status'] . "</td>";
  echo "<td><a rel='facebox' href='functions/clientRest.php?id=".$row['id']."'><span class=\"btn btn-success btn-xs glyphicon glyphicon-eye-open\">RESTORE</span></td>";
  echo "<td><a rel='facebox' class=\"btn btn-danger clientdelbtn\" data-toggle='modal' href='#?id=".$row['id']."'><span class=\"  btn-xs glyphicon glyphicon-eye-open\">DELETE</span></td>";
  echo "</tr>";
  }


?>
                                      
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
                        <span>Copyright &copy; KloudNet ICT Solutions 2022</span>
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
                    <a class="btn btn-primary" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- delete plan Modal-->
        <div class="modal fade" id="delplanModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Delete Processed Complaint </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    </button>
                </div>

                <form action="functions/clientDel.php" method="POST">

                    <div class="modal-body">

                        <input type="hidden" name="id" id="id">

                        <h5>Are you sure you want to delete this data?</h5>
                    </di
v>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"> NO </button>
                        <button type="submit" name="deletedata" class="btn btn-primary"> YES</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

        <script>
        $(document).ready(function () {

            $('.clientdelbtn').on('click', function () {

                $('#delplanModal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#id').val(data[0]);

            });
        });
    </script>
</body>

</html>