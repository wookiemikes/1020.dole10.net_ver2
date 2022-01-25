<?php

include '../pages/dashboard-pfo-bck.php';
if ($_SESSION["oat_uname"] == "" && $_SESSION["oat_pwd"] == "") {
    session_destroy();
    session_unset();
    header("Location: ../pages/login-pfo.php");
    exit;
}

//include '../pages/dashboardview-back.php';

if (isset($_POST['view'])) {
    # code...
    $tin = $_POST["id"];

    $connect = mysqli_connect("localhost", "d0l310_1020db", "d0l310_1020db", "d0l310_1020db");
    $viewquery = "SELECT * FROM `user_details_tbl` JOIN user_app_details ON user_details_tbl.id_diff = user_app_details.id_diff JOIN user_emp_details_tbl ON user_app_details.id_diff = user_emp_details_tbl.id_diff JOIN user_est_details_tbl ON user_est_details_tbl.id_diff = user_emp_details_tbl.id_diff WHERE user_details_tbl.id_diff = '" . $tin . "'";
    $viewresults = mysqli_query($connect, $viewquery);

    while ($row = mysqli_fetch_assoc($viewresults)) {

        $_SESSION["ud_tin"] = $row["ud_tin"];
        $_SESSION["id_diff"] = $row["id_diff"];
        $_SESSION["ud_est_name"] = $row["ud_est_name"];
        $_SESSION["ud_st"] = $row["ud_st"];
        $_SESSION["ud_ct"] = $row["ud_ct"];
        $_SESSION["ud_prov"] = $row["ud_prov"];
        $_SESSION["ud_contact"] = $row["ud_contact"];
        $_SESSION["ud_fax"] = $row["ud_fax"];
        $_SESSION["ud_email"] = $row["ud_email"];
        $_SESSION["ud_manager"] = $row["ud_manager"];
        $_SESSION["ua_status"] = $row["ua_status"];
        $_SESSION["uad_date_filed"] = $row["uad_date_filed"];
        $_SESSION["uad_date_approved"] = $row["uad_date_approved"];
        $_SESSION["uad_ein"] = $row["uad_ein"];
        $_SESSION["ued_nob"] = $row["ued_nob"];
        $_SESSION["ued_product"] = $row["ued_product"];
        $_SESSION["ued_total_male"] = $row["ued_total_male"];
        $_SESSION["ued_total_fmale"] = $row["ued_total_fmale"];
        $_SESSION["ued_total"] = $row["ued_total"];
        $_SESSION["ued_m_filipinos"] = $row["ued_m_filipinos"];
        $_SESSION["ued_f_filipinos"] = $row["ued_f_filipinos"];
        $_SESSION["ued_t_filipinos"] = $row["ued_t_filipinos"];
        $_SESSION["ued_m_resalien"] = $row["ued_m_resalien"];
        $_SESSION["ued_f_resalien"] = $row["ued_f_resalien"];
        $_SESSION["ued_t_resalien"] = $row["ued_t_resalien"];
        $_SESSION["ued_m_nralien"] = $row["ued_m_nralien"];
        $_SESSION["ued_f_nralien"] = $row["ued_f_nralien"];
        $_SESSION["ued_t_nralien"] = $row["ued_t_nralien"];
        $_SESSION["ued_m_minor_a"] = $row["ued_m_minor_a"];
        $_SESSION["ued_f_minor_a"] = $row["ued_f_minor_a"];
        $_SESSION["ued_t_minor_a"] = $row["ued_t_minor_a"];
        $_SESSION["ued_m_minor_b"] = $row["ued_m_minor_b"];
        $_SESSION["ued_f_minor_b"] = $row["ued_f_minor_b"];
        $_SESSION["ued_t_minor_b"] = $row["ued_t_minor_b"];
        $_SESSION["ued_m_18_30"] = $row["ued_m_18_30"];
        $_SESSION["ued_f_18_30"] = $row["ued_f_18_30"];
        $_SESSION["ued_t_18_30"] = $row["ued_t_18_30"];
        $_SESSION["ued_m_abv_30"] = $row["ued_m_abv_30"];
        $_SESSION["ued_f_abv_30"] = $row["ued_f_abv_30"];
        $_SESSION["ued_t_abv_30"] = $row["ued_t_abv_30"];
        $_SESSION["uet_name_labor"] = $row["uet_name_labor"];
        $_SESSION["uet_add_labor"] = $row["uet_add_labor"];
        $_SESSION["uet_blr"] = $row["uet_blr"];
        $_SESSION["uet_machine_eq"] = $row["uet_machine_eq"];
        $_SESSION["uet_material_eq"] = $row["uet_material_eq"];
        $_SESSION["uet_chemical"] = $row["uet_chemical"];
        $_SESSION["uet_branch"] = $row["uet_branch"];
        $_SESSION["uet_capital"] = $row["uet_capital"];
        $_SESSION["uet_assets"] = $row["uet_assets"];
        $_SESSION["uad_inspector"] = $row["uad_inspector"];
        $_SESSION["uad_date_inspection"] = $row["uad_date_inspection"];
        $_SESSION["uad_remarks"] = $row["uad_remarks"];
        $_SESSION["uad_req_link"] = $row["uad_req_link"];






        # code...
    }
}


include '../pages/logout.php';


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mannat Themes">
    <meta name="keyword" content="">

    <title>DOLE 1020 | Admin</title>

    <!-- Theme icon -->
    <link rel="shortcut icon" href="../assets/images/doleico.ico">

    <link href="../assets/plugins/morris-chart/morris.css" rel="stylesheet">
    <link href="../assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme Css -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/slidebars.min.css" rel="stylesheet">
    <link href="../assets/css/icons.css" rel="stylesheet">
    <link href="../assets/css/menu.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/style.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>

<body class="sticky-header">
    <section>
        <!-- sidebar left start-->
        <div class="sidebar-left">
            <div class="sidebar-left-info">

                <div class="user-box">
                    <div class="d-flex justify-content-center">
                        <img src="../assets/images/users/avatar.jpg" alt="" class="img-fluid rounded-circle">
                    </div>
                    <div class="text-center text-white mt-2">
                        <h6>DOLE Region 10</h6>
                        <p class="text-muted m-0">Admin</p>
                    </div>
                </div>

                <!--sidebar nav start-->
                <ul class="side-navigation">
                    <li>
                        <h3 class="navigation-title">Navigation</h3>
                    </li>
                    <li class="active">
                        <a href="../pages/dashboard-pfo"><i class=" mdi mdi-keyboard-backspace"></i> <span>Return</span></a>
                    </li>

                </ul>
                <!--sidebar nav end-->
            </div>
        </div><!-- sidebar left end-->

        <!-- body content start-->
        <div class="body-content">
            <!-- header section start-->
            <div class="header-section">
                <!--logo and logo icon start-->
                <div class="logo">
                    <a href="../pages/dashboard">
                        <!--<i class="fa fa-maxcdn"></i>-->
                        <span class="brand-name">DOLE 1020</span>
                    </a>
                </div>

                <!--toggle button start-->
                <a class="toggle-btn"><i class="ti ti-menu"></i></a>
                <!--toggle button end-->

                <!--mega menu start-->
                <div id="navbar-collapse-1" class="navbar-collapse collapse mega-menu">

                </div>
                <!--mega menu end-->

                <div class="notification-wrap">
                    <!--right notification start-->
                    <div class="right-notification">
                        <ul class="notification-menu">


                            <li>
                                <a href="javascript:;" data-toggle="dropdown">
                                    <img src="../assets/images/users/avatar.jpg" alt="">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right profile-menu">
                                    <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle m-r-5 text-muted"></i> Profile</a>
                                    <a class="dropdown-item" href="#"><span class="badge badge-success pull-right">5</span><i class="mdi mdi-settings m-r-5 text-muted"></i> Settings</a>
                                    <a class="dropdown-item" href="#"><i class="mdi mdi-lock-open-outline m-r-5 text-muted"></i> Lock screen</a>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal"><i class="mdi mdi-logout m-r-5 text-muted"></i> Logout</a>
                                </div>

                            </li>
                        </ul>
                    </div>
                    <!--right notification end-->
                </div>
            </div>
            <!-- header section end-->

            <div class="container-fluid">
                <div class="page-head"></div>
                <div class="row">
                    <div class="col-lg-9 col-sm-12">
                        <div class="row">
                            <div class="col-lg-12 col-sm-12">
                                <div class="card m-b-30 contact">
                                    <div class="card-body">
                                        <h6 class="header-title pb-3"><b>I. ESTABLISHMENT DETAILS</b></h6>
                                        <div class="row">
                                            <input type="hidden" value="<?php echo $_SESSION['ud_tin']; ?>">


                                            <div class="col-md-12">
                                                <label for="firstName"><b>Name of Establishment</b></label>
                                                <input type="text" class="form-control" name="ud_est_name" id="firstName" value="<?php echo $_SESSION['ud_est_name']; ?>" readonly>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="firstName"><b>Street Address</b></label>
                                                <input type="text" class="form-control" id="firstName" name="ud_st" value="<?php echo $_SESSION['ud_st']; ?>" readonly>
                                            </div>
                                            <div class="col-md-3">
                                                <label for="firstName"><b>Provincial Office :</b></label>
                                                <input class="form-control" type="text" name="" id="" value="<?php echo $_SESSION['ud_prov']; ?>" readonly>
                                            </div>
                                            <div class="col-md-3    ">
                                                <label for="firstName"><b>Municipality :</b></label>
                                                <input class="form-control" type="text" name="" id="" value="<?php echo $_SESSION['ud_ct']; ?>" readonly>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="firstName"><b>Contract Number:</b></label>
                                                <input type="text" class="form-control" id="firstName" name="ud_contact" value="<?php echo $_SESSION['ud_contact']; ?>" readonly>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="firstName"><b>Fax Number :</b></label>
                                                <input type="text" class="form-control" name="ud_fax" value="<?php echo $_SESSION['ud_fax']; ?>" readonly>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="firstName"><b>Email Address :</b></label>
                                                <input type="text" class="form-control" id="firstName" name="ud_email" value="<?php echo $_SESSION['ud_email']; ?>" readonly>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label for="firstName"><b>Name of Establishment Owner/ Manager:</b></label>
                                                <input type="text" class="form-control" id="firstName" name="ud_manager" value="<?php echo $_SESSION['ud_manager']; ?>" readonly>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="firstName"><b>Taxpayer's Identification Number (TIN) :</b></label>
                                                <input type="text" class="form-control" name="ud_tin" id="firstName" value="<?php echo $_SESSION['ud_tin']; ?>" readonly>
                                            </div>


                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label for="firstName"><b>Nature of Establishment:</b></label>
                                                <input type="text" class="form-control" id="firstName" name="ud_manager" value="<?php echo $_SESSION['ued_nob']; ?>" readonly>
                                            </div>
                                            <div class="col-md-7">
                                                <label for="firstName"><b>Product Manufactured, Service Rendered or Product Sold :</b></label>
                                                <input type="text" class="form-control" name="ud_tin" id="firstName" value="<?php echo $_SESSION['ued_product']; ?>" readonly>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-12">
                                <div class="card m-b-30 contact">
                                    <div class="card-body">
                                        <h6 class="header-title pb-3"><b>II. EMPLOYMENT DETAILS</b></h6>
                                        <div class="row">


                                            <div class="col-md-12">
                                                <label for="firstName"><b>Number of Employees :</b></label>
                                                <br>
                                                <table class="table table-sm table-responsive table-striped ">
                                                    <thead class="text-center thead-dark">
                                                        <th></th>
                                                        <th><b>TOTAL</b></th>
                                                        <th><b>FILIPINOS</b></th>
                                                        <th><b>RESIDENT ALIEN</b></th>
                                                        <th><b>NON-RESIDENT ALIEN</b></th>
                                                        <th><b>BELOW 15 YEARS</b></th>
                                                        <th><b>BELOW 15-17 YEARS</b></th>
                                                        <th><b>18-30 YEARS</b></th>
                                                        <th><b>ABOVE 30 YEARS</b></th>
                                                    </thead>
                                                    <tbody class="text-center">
                                                        <tr name="line_items">
                                                            <td>
                                                                <h5><b>MALE</b></h5>
                                                            </td>
                                                            <td><input class="form-control" type="number" name="ued_total_male" id="" value="<?php echo $_SESSION['ued_total_male']; ?>" readonly></td>
                                                            <td><input class="form-control" type="number" name="ued_m_filipinos" id="" value="<?php echo $_SESSION['ued_m_filipinos']; ?>" readonly></td>
                                                            <td><input class="form-control" type="number" name="ued_m_resalien" id="" value="<?php echo $_SESSION['ued_m_resalien']; ?>" readonly></td>
                                                            <td><input class="form-control" type="number" name="ued_m_nralien" id="" value="<?php echo $_SESSION['ued_m_nralien']; ?>" readonly></td>
                                                            <td><input class="form-control" type="number" name="ued_m_minor_a" id="" value="<?php echo $_SESSION['ued_m_minor_a']; ?>" readonly></td>
                                                            <td><input class="form-control" type="number" name="ued_m_minor_b" id="" value="<?php echo $_SESSION['ued_m_minor_b']; ?>" readonly></td>
                                                            <td><input class="form-control" type="number" name="ued_m_18_30" id="" value="<?php echo $_SESSION['ued_m_18_30']; ?>" readonly></td>
                                                            <td><input class="form-control" type="number" name="ued_m_abv_30" id="" value="<?php echo $_SESSION['ued_m_abv_30']; ?>" readonly></td>
                                                        </tr>
                                                        <tr name="line_items">
                                                            <td>
                                                                <h5><b>FEMALE</b></h5>
                                                            </td>
                                                            <td><input class="form-control" type="number" name="ued_total_fmale" id="" value="<?php echo $_SESSION['ued_total_fmale']; ?>" readonly></td>
                                                            <td><input class="form-control" type="number" name="ued_f_filipinos" id="" value="<?php echo $_SESSION['ued_f_filipinos']; ?>" readonly></td>
                                                            <td><input class="form-control" type="number" name="ued_f_resalien" id="" value="<?php echo $_SESSION['ued_f_resalien']; ?>" readonly></td>
                                                            <td><input class="form-control" type="number" name="ued_f_nralien" id="" value="<?php echo $_SESSION['ued_f_nralien']; ?>" readonly></td>
                                                            <td><input class="form-control" type="number" name="ued_f_minor_a" id="" value="<?php echo $_SESSION['ued_f_minor_a']; ?>" readonly></td>
                                                            <td><input class="form-control" type="number" name="ued_f_minor_b" id="" value="<?php echo $_SESSION['ued_f_minor_b']; ?>" readonly></td>
                                                            <td><input class="form-control" type="number" name="ued_f_18_30" id="" value="<?php echo $_SESSION['ued_f_18_30']; ?>" readonly></td>
                                                            <td><input class="form-control" type="number" name="ued_f_abv_30" id="" value="<?php echo $_SESSION['ued_f_abv_30']; ?>" readonly></td>
                                                        </tr>
                                                        <tr name="line_items">
                                                            <td>
                                                                <h5><b>GRAND TOTAL</b></h5>
                                                            </td>
                                                            <td><input class="form-control" type="number" name="ued_total" id="" value="<?php echo $_SESSION['ued_total']; ?>" readonly></td>
                                                            <td><input class="form-control" type="number" name="ued_t_filipinos" id="" value="<?php echo $_SESSION['ued_t_filipinos']; ?>" readonly></td>
                                                            <td><input class="form-control" type="number" name="ued_t_resalien" id="" value="<?php echo $_SESSION['ued_t_resalien']; ?>" readonly></td>
                                                            <td><input class="form-control" type="number" name="ued_t_nralien" id="" value="<?php echo $_SESSION['ued_t_nralien']; ?>" readonly></td>
                                                            <td><input class="form-control" type="number" name="ued_t_minor_a" id="" value="<?php echo $_SESSION['ued_t_minor_a']; ?>" readonly></td>
                                                            <td><input class="form-control" type="number" name="ued_t_minor_b" id="" value="<?php echo $_SESSION['ued_t_minor_b']; ?>" readonly></td>
                                                            <td><input class="form-control" type="number" name="ued_t_18_30" id="" value="<?php echo $_SESSION['ued_t_18_30']; ?>" readonly></td>
                                                            <td><input class="form-control" type="number" name="ued_t_abv_30" id="" value="<?php echo $_SESSION['ued_t_abv_30']; ?>" readonly></td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label for="firstName"><b>Name of Labor Union, if any :</b></label>
                                                <input type="text" class="form-control" name="uet_name_labor" value="<?php echo $_SESSION['uet_name_labor']; ?>" readonly>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label for="firstName"><b>Address of Labor Union :</b></label>
                                                <input type="text" class="form-control" name="uet_add_labor" value="<?php echo $_SESSION['uet_add_labor']; ?>" readonly>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="firstName"><b>BLR Registration Number:</b></label>
                                                <input type="text" class="form-control" name="uet_blr" value="<?php echo $_SESSION['uet_blr']; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-sm-12">
                                <div class="card m-b-30 contact">
                                    <div class="card-body">
                                        <h6 class="header-title pb-3"><b>III. TECHNICAL DETAILS</b></h6>
                                        <div class="row">


                                            <div class="col-md-12">
                                                <label for="firstName"><b>Machinery Equipments:</b></label>
                                                <input type="text" class="form-control" name="ud_est_name" id="firstName" value="<?php echo $_SESSION['uet_machine_eq']; ?>" readonly>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">


                                            <div class="col-md-12">
                                                <label for="firstName"><b>Material Handling Equipments:</b></label>
                                                <input type="text" class="form-control" name="ud_est_name" id="firstName" value="<?php echo $_SESSION['uet_material_eq']; ?>" readonly>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">


                                            <div class="col-md-12">
                                                <label for="firstName"><b>Chemicals and Substances Used:</b></label>
                                                <input type="text" class="form-control" name="ud_est_name" id="firstName" value="<?php echo $_SESSION['uet_chemical']; ?>" readonly>
                                            </div>
                                        </div>

                                        <br>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label for="firstName"><b>Branch Unit, State name of Parent Establishment and Location</b></label>
                                                <input type="text" class="form-control" id="firstName" name="ud_st" value="<?php echo $_SESSION['uet_branch']; ?>" readonly>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="firstName"><b>Total Assets:</b></label>
                                                <input type="text" class="form-control" id="firstName" name="ud_contact" value="<?php echo $_SESSION['uet_assets']; ?>" readonly>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="firstName"><b>Total Capitalizations :</b></label>
                                                <input type="text" class="form-control" name="ud_fax" value="<?php echo $_SESSION['uet_capital']; ?>" readonly>
                                            </div>

                                        </div>
                                        <br>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end row-->
                    </div>

                    <div class="col-lg-3 col-sm-12">
                        <div class="row">
                            <div class="col-lg-12 col-sm-12">
                                <div class="card m-b-30 contact">
                                    <div class="card-body">
                                        <h6 class="header-title pb-3">ACTIONS</h6>
                                        <table class="table">
                                             <tr>
                                                <td colspan="2"><button class="btn btn-block btn-sm btn-success" data-toggle="modal" data-target="#approve"><i class="mdi mdi-check-circle mr-2"></i><b>APPROVE APPLICATION</b></button></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"><button class="btn btn-block btn-sm btn-warning" data-toggle="modal" data-target="#deny"><i class="mdi mdi-alert-circle mr-2"></i><b>SEND REMARKS</b></button></td>
                                            </tr>
                                            
                                            <tr>
                                                <td><b>REQUIREMENTS LINK: </b></td>
                                                <td><a href="<?php echo $_SESSION["uad_req_link"] ?>" target="_blank" style="color:blue;">CLICK HERE</a></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end row-->

            </div>
            <!--end container-->

            <!--end container-->

            <!--footer section start-->
            <footer class="footer">
                2020 &copy; DOLE REGION 10.
            </footer>
            <!--footer section end-->


            <!-- Right Slidebar start -->
            <!--end Right Slidebar-->
        </div>

      <!--Modals-->
        <div class="modal fade" id="approve" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle"><b>Approve Applicant?</b></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="../pages/dashboardview-back-b.php" method="post">
                        <div class="modal-body">
                            <input type="hidden" class="form-control" placeholder="update EIN" name="emailFrom" value="dole10.1020email@gmail.com" readonly>
                            <br>
                            <b>Receiver Email:</b>
                            <input type="text" class="form-control" placeholder="update EIN" name="emailTo" value="<?php echo $_SESSION["ud_email"] ?>" readonly>
                            <br>
                            <input type="hidden" class="form-control" placeholder="update EIN" name="subjectName" value="NOTICE : RULE 1020-REGISTRATION OF ESTABLISHMENT APPLICATION" readonly>
                            <br>
                            <b>Input 1020 Establishment Identification Number (EIN):</b>
                            <input type="text" class="form-control" placeholder="update EIN" name="ein">
                            <br>
                            <b>Approved By:</b>
                            <input type="text" class="form-control" placeholder="Name of 1020 Focal" name="approvedBy">
                            <br>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1"><b>State Remarks:</b></label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="remarks1" placeholder="State Here"></textarea>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <input type="hidden" name="pud_tin" value="<?php echo $_SESSION['id_diff']; ?>">

                            <button type="submit" class="btn btn-success" name="sendApproveBtnPfo"><i class="mdi mdi-check-circle mr-2"></i><b>APPROVE & SEND EMAIL</b></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--Modal-->
        <div class="modal fade" id="deny" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle"><b>Send Remarks</b></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="../pages/dashboardview-back-b.php" method="post">
                        <div class="modal-body">
                            <input type="hidden" class="form-control" placeholder="update EIN" name="emailFrom" value="dole10.1020email@gmail.com" readonly>
                            <br>
                            <b>Receiver Email:</b>
                            <input type="text" class="form-control" placeholder="update EIN" name="emailTo" value="<?php echo $_SESSION["ud_email"] ?>" readonly>
                            <br>
                            <input type="hidden" class="form-control" placeholder="update EIN" name="subjectName" value="NOTICE : RULE 1020-REGISTRATION OF ESTABLISHMENT APPLICATION" readonly>
                            <br>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1"><b>State Remarks:</b></label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="remarks1" placeholder="State Here"></textarea>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <input type="hidden" name="pud_tin" value="<?php echo $_SESSION['id_diff']; ?>">

                            <button type="submit" class="btn btn-success" name="sendPendingBtnPfo"><i class="mdi mdi-check-circle mr-2"></i><b>SEND EMAIL</b></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!---->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <form action="../pages/dashboard" method="post">
                        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <input type="submit" class="btn btn-primary" value="Logout" name="signout">
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="modal" id="approve_mod" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered text-dark" role="document">
                <div class="modal-content" id="data">

                </div>
            </div>
        </div>
        <!--end body content-->
    </section>

    <!-- jQuery -->




    <script src="../assets/js/datatables-demo.js"></script>

    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/jquery-migrate.js"></script>
    <script src="../assets/js/modernizr.min.js"></script>
    <script src="../assets/js/jquery.slimscroll.min.js"></script>
    <script src="../assets/js/slidebars.min.js"></script>

    <!-- Responsive and datatable js -->
    <script src="../assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="../assets/plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="../assets/plugins/datatables/responsive.bootstrap4.min.js"></script>




    <!--plugins js-->
    <script src="../assets/plugins/counter/jquery.counterup.min.js"></script>
    <script src="../assets/plugins/waypoints/jquery.waypoints.min.js"></script>
    <script src="../assets/plugins/sparkline-chart/jquery.sparkline.min.js"></script>
    <script src="../assets/pages/jquery.sparkline.init.js"></script>

    <script src="../assets/plugins/chart-js/Chart.bundle.js"></script>
    <script src="../assets/plugins/morris-chart/raphael-min.js"></script>
    <script src="../assets/plugins/morris-chart/morris.js"></script>
    <script src="../assets/pages/dashboard-init.js"></script>




    <!--app js-->
    <script src="../assets/js/jquery.app.js"></script>
    <script>
        jQuery(document).ready(function($) {
            $('.counter').counterUp({
                delay: 100,
                time: 1200
            });
        });
    </script>
</body>

</html>