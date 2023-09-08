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
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
<style>
    /* Custom styles for the progress bar */
.progress {
    height: 10px; /* Set the desired height */
    margin-bottom: 10px; /* Add some space below the progress bar */
}
.progress-bar {
    height: 100%; /* Make sure the progress bar fills the container height */
}
.ck-editor__editable {
    min-height: 200px;
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
                                                    <input type="date" id="date" name="start_date" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="endDate">End Date</label>
                                                    <input type="date" id="date" name="end_date" class="form-control">
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
                            

                                <div class="text-right mt-4">
                                        <button type="button" class="btn btn-secondary" id="prevStep3">Previous</button>
                                        <button type="button" class="btn btn-primary" id="nextStep3">Next</button>
                                 </div>
                                </div>
                                <div id="step4" style="display: none;">
                                <div class="form-group">
                                    <label for="rationale">Rationale of the Activity</label>
                                    <div>
                                        <textarea class="form-control" id="editor" name="rationale" rows="3"></textarea>
                                    </div>
                                   
                                </div>
                                <div class="text-right mt-4">
                                        <button type="button" class="btn btn-secondary" id="prevStep4">Previous</button>
                                        <button type="button" class="btn btn-primary" id="nextStep4">Next</button>
                            </div>
                        </div>

                                <div id="step5" style="display: none;">
                                <div class="form-group">
                                <label for="objectives">Objectives (General and Specific)</label>
                                <textarea class="form-control" id="editor1" name="objectives" rows="6"></textarea>
                            </div>
                                
                                <div class="text-right mt-4">
                                        <button type="button" class="btn btn-secondary" id="prevStep5">Previous</button>
                                        <button type="button" class="btn btn-primary" id="nextStep5">Next</button>
                            </div>
                        </div>

                            
                            
                            <div id="step6" style="display: none;">
                                        <div class="form-group budget">
                                        <label for="budget">Budget Source</label>
                                        <select class="form-control" id="budget" name="budget">
                                            <option value="">No budget needed</option>
                                            <option value="">Fund Partner Agency</option>
                                            <option value="">Fund of University</option>
                                        </select>
                                        </div>
                                        <div>
                                            <div class="row">
                                                <table class="table table-responsive" style="width: 100%">
                                                    <thead>
                                                        <tr>
                                                            <th class="col-md-3" style="font-size: 12.8px">Item Name</th>
                                                            <th class="col-md-3" style="font-size: 12.8px">Quantity</th>
                                                            <th class="col-md-3" style="font-size: 12.8px">Cost</th>
                                                            <th class="col-md-3" style="text-align:center; font-size: 12.8px">Sub Total</th>
                                                            <th class="" style="text-align:right; font-size: 12.8px"><button id="addRow" type="button" class="btn btn-success btn-circle btn-sm"><span class="material-symbols-outlined">add</span></button></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="table">
                                                        <tr>
                                                            <td><input type="text" class="form-control outline" id="item" placeholder="Item Name"></td>
                                                            <td><input class="quantity form-control" type="number" id="quantity1" onkeyup="quantityfunc(1)" placeholder="Quantity"></td>
                                                            <td><input class="price form-control" type="number" id="cost1" onkeyup="pricefunc(1)" placeholder="Cost"></td>
                                                            <td style="text-align:center"><span class="subtotal1" id="subtotal1">0.00</span></td>
                                                            <td style="text-align:right"><button onclick="delRow(1)" id="delRow1" class="btn btn-danger btn-circle btn-sm" type="button"><span class="material-symbols-outlined">delete</span></button></td>
                                                        </tr>  
                                                    </tbody>
                                                </table>
                                                
                                                
                                                <!-- <div id="grand-total"></div> -->

                                            </div>
                                        </div>
                                        <div class="row" style="margin-top: 10px; margin-left: 10px">
                                            <div>Total: <span id="total">0</span></div>
                                        </div>
                                        <div class="row" style="display: flex; justify-content: center; margin-top: 20px">
                                            
                                        </div>

                                        <script>
                                            var i = 2;
                                            var total = 0;
                                            $('#addRow').click(function(){
                                                var newrow = $('#table').append('<tr><td><input type="text" class="form-control outline" id="item" placeholder="Item Name"></td><td><input class="quantity form-control" id="quantity'+i+'" type="number" onkeyup="quantityfunc('+i+')" placeholder="Quantity"></td><td><input class="price form-control" id="cost'+i+'" type="number" onkeyup="pricefunc('+i+')" placeholder="Cost"></td><td style="text-align:center"><span class="subtotal'+i+'" id="subtotal'+i+'">0.00</span></td><td style="text-align:right"><button onclick="delRow('+i+')" class="btn btn-danger btn-circle btn-sm" id="delRow'+i+'" type="button"><span class="material-symbols-outlined">delete</span></button></td></tr></table></div><td>');
                                                i++;
                                            });

                                            function delRow(q){
                                                $('#delRow'+q).closest('tr').remove();
                                                var k = 0;
                                                total = 0;
                                                while (k < i) {
                                                    if(document.getElementById("subtotal"+k)==null){
                                                        k++;
                                                        continue;
                                                    }
                                                    total += parseInt(document.getElementById("subtotal"+k).innerHTML);
                                                    k++;
                                                }
                                                document.getElementById("total").innerHTML = total;
                                            }
                                            
                                            function quantityfunc(q) {
                                                console.log(q);
                                                var quantityValue = document.getElementById("quantity"+q).value;
                                                var unitValue = document.getElementById("cost"+q).value;
                                                if(quantityValue == null && unitValue == null){
                                                    return;
                                                }
                                                document.getElementById("subtotal"+q).innerHTML = quantityValue * unitValue;
                                                var k = 0;
                                                total = 0;
                                                while (k < i) {
                                                    if(document.getElementById("subtotal"+k)==null){
                                                        k++;
                                                        continue;
                                                    }
                                                    total += parseInt(document.getElementById("subtotal"+k).innerHTML);
                                                    k++;
                                                }
                                                document.getElementById("total").innerHTML = total;
                                            }

                                            function pricefunc(q) {
                                                var quantityValue = document.getElementById("quantity"+q).value;
                                                var unitValue = document.getElementById("cost"+q).value;
                                                if(quantityValue == null && unitValue == null){
                                                    return;
                                                }
                                                document.getElementById("subtotal"+q).innerHTML = quantityValue * unitValue;
                                                var k = 0;
                                                total = 0;
                                                while (k < i) {
                                                    if(document.getElementById("subtotal"+k)==null){
                                                        k++;
                                                        continue;
                                                    }
                                                    total += parseInt(document.getElementById("subtotal"+k).innerHTML);
                                                    k++;
                                                }
                                                document.getElementById("total").innerHTML = total;
                                            }
                                        </script>
                                      
                            <div class="text-right mt-4">
                                <button type="button" class="btn btn-secondary" id="prevStep6">Previous</button>
                                <input type="submit" name="submit" class="submit btn btn-primary" value="Submit">
                            </div>
                            </div>
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
                                            <button type="submit" class="btn btn-primary" id="saveRoleButton">Save Role</button>
                                        </div>
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