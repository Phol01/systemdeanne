<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Unilink</title>
    <link rel="shortcut icon" type="image/png" href="../Unilink/BSU.png" alt="Logo" />
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
<style>
    /* Custom styles for the progress bar */
.progress {
    height: 10px; /* Set the desired height */
    margin-bottom: 10px; /* Add some space below the progress bar */
}
.progress-bar {
    height: 100%; /* Make sure the progress bar fills the container height */
}
</style>
</head>
<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <img src="..\Unilink\BSU.png" height="45" width="50"> 
                <div class="sidebar-brand-text mx-3">UNILINK</div>
            </a>
            
            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="ui-formsPreview.php">
                    <i class="fas fa-fw fa-calendar"></i>
                    <span>Activity Management</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="ui-announcement.php">
                    <i class="fas fa-fw fa-bullhorn"></i>
                    <span>Announcements</span>
                </a>
            </li>
            <hr class="sidebar-divider">

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
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"></span>
                                <img class="img-profile rounded-circle"
                                    src="imgs/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="ui-profile.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
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
                        <nav aria-label="breadcrumb">
                          <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="ui-formsPreview.php">Activity Management</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Activity Form</li>
                          </ol>
                        </nav>
                        <div class="progress">
                            <div class="progress-bar progress-bar active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-2">
                        </div>
                        <!-- <h6 class="card-title font-weight-bold mb-2">Activity Form</h6> -->

                        <div class="card">
                            <div class="card-body">
                                <form id="form" action="forms.php" method="post" enctype="multipart/form-data">
                                    <div id="step1">
                                        <div class="form-group">
                                            <label for="activityName">Activity Title</label>
                                            <input type="text" class="form-control outline" id="activityName" name="activityName"/>
                                        </div>

                                        <div class="form-group college">
                                        <label for="department">Department</label>
                                        <select class="form-control" id="department" name="department">
                                            <option value="">-- Select Department --</option>
                                            <option value="CE">College of Engineering</option>
                                            <option value="CIT">College of Industrial Technology</option>
                                            <option value="CICS">College of 
                                            Informatics and Computing Sciences</option>
                                            <option value="CAS">College of Arts and Sciences</option>
                                            <option value="CABEIHM">College of Accountancy, Business, Economics and International Hospitality Management</option>
                                            <option value="CTE">College of Teacher Education</option>
                                            <option value="CONAHS">College of Nursing and Allied Health Sciences</option>
                                            <option value="LS">Laboratory School</option>
                                        </select>
                                        </div>  

                                        <div class="form-group">
                                            <label for="program">Program</label>
                                            <select class="form-control" id="program" name="program">
                                            </select>
                                        </div>
                                        <div class="text-right mt-4">
                                        <button type="button" class="btn btn-primary" id="nextStep1">Next</button>
                                        </div>
                                    </div>

                                    <div id="step2" style="display: none;">

                                    
                                    <label class="radio-inline mr-4" for="localRadio">
    <input type="radio" name="partnerType" id="localRadio" value="Local">Local
</label>

<label class="radio-inline" for="internationalRadio">
    <input type="radio" name="partnerType" id="internationalRadio" value="International">International
</label>
                                      
                                         <div class="form-group">
                                            <label for="partner">Partner Name</label>
                                            <select id="partnerDropdown" class="form-control" name="partner">
                                                <!-- Options will be added here dynamically -->
                                            </select>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="startDate">Start Date</label>
                                                    <input type="date" id="date" name="start_date" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="endDate">End Date</label>
                                                    <input type="date" id="date" name="end_date" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-right mt-4">
                                        <button type="button" class="btn btn-secondary" id="prevStep2">Previous</button>
                                        <button type="button" class="btn btn-primary" id="nextStep2">Next</button>
                                    </div>
                                </div>
                                        <!-- <input type="button" name="next" class="next btn btn-info" value="Next" /> -->
                                    <div id="step3" style="display: none;">
                                    <div class="form-group">
                                    <label for="partner">Project Leader and Project Member</label>
                                    <button type="button" class="btn btn-info" id="addRoleButton">
                                        <i class="fas fa-plus"></i> Add Roles
                                    </button>
                                </div>

                                <div id="roleFormsContainer">
                                    <!-- Role forms will be added here dynamically -->
                                </div>

                                <div class="form-group">
                                    <label for="rationale">Rationale of the Activity</label>
                                    <textarea class="form-control" id="rationale" name="rationale" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                <label for="objectives">Objectives (General and Specific)</label>
                                <textarea class="form-control" id="objectives" name="objectives" rows="6"></textarea>
                            </div>

                            <div class="text-right mt-4">
                                        <button type="button" class="btn btn-secondary" id="prevStep3">Previous</button>
                                        <button type="button" class="btn btn-primary" id="nextStep3">Next</button>
                            </div>
                        </div>
                            <div id="step4" style="display: none;">
                                        <div class="form-group budget">
                                        <label for="budget">Budget Source</label>
                                        <select class="form-control" id="budget" name="budget">
                                            <option value="">No budget needed</option>
                                            <option value="">Fund Partner Agency</option>
                                            <option value="">Fund of University</option>
                                        </select>
                                        </div>  
                                        <div class="row">
                                            <table>
                                                <tr>
                                                    <td class="col-md-4"><input type="text" class="form-control outline" id="item" placeholder="Item Name">
                                                    <td><input class="quantity form-control" type="number" onchange="quantityfunc(this)" placeholder="Quantity"></td>
                                                    <td><input class="price form-control" type="number" onchange="pricefunc(this)" placeholder="Cost"></td>
                                                    <td><span class="subtotal">0.00</span></td>
                                                </tr>  
                                            </table>
                                            <!-- <div id="grand-total"></div> -->

                                        </div>
                                        
                            <div class="text-right mt-4">
                                <button type="button" class="btn btn-secondary" id="prevStep4">Previous</button>
                                <input type="submit" name="submit" class="submit btn btn-primary" value="Submit">
                            </div>
                        </div>
                        
                    </form>

                                <div class="modal fade" id="addRoleModal" tabindex="-1" role="dialog" aria-labelledby="addRoleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="addRoleModalLabel">Add Role</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" id="searchRole" placeholder="Search roles">
                                                <div class="input-group-append">
                                                    <button class="btn btn-outline-secondary" type="button" id="rowsLabel">
                                                        Rows <i class="fas fa-chevron-down"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <form id="roleModalForm">
                                                <!-- List of roles will be displayed here -->
                                                <div id="roleList">
                                                    <!-- Roles will be added here dynamically -->
                                                </div>
                                            </form>
                                            <nav id="pagination" class="mt-3" style="display: none;">
                                                <ul class="pagination justify-content-center">
                                                    <li class="page-item disabled" id="prevPage">
                                                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                                                    </li>
                                                    <li class="page-item" id="nextPage">
                                                        <a class="page-link" href="#">Next</a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary" id="saveRoleButton">Save Role</button>
                                        </div>
                                    </div>
                                </div>
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
                        <span>Developed by Unilink 2023</span>
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
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

<?php

include 'footer.php'

?>