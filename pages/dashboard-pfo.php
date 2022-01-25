<?php
include '../pages/dashboard-pfo-bck.php';
if ($_SESSION["oat_uname"] == "" && $_SESSION["oat_pwd"] == "") {
    session_destroy();
    session_unset();
    header("Location: ../pages/login-pfo.php");
    exit;
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

    <title>DOLE 1020 | <?php echo $_SESSION['oat_office_desc']; ?></title>

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
                        <h6>DOLE - <?php echo $_SESSION['oat_office_desc']; ?></h6>
                        <p class="text-muted m-0">Provincial Field Office</p>
                    </div>
                </div>

                <!--sidebar nav start-->
                <ul class="side-navigation">
                    <li>
                        <h3 class="navigation-title">Navigation</h3>
                    </li>
                    <li class="menu-list">
                        <a href="../pages/dashboard"><i class="mdi mdi-gauge"></i> <span>Dashboard</span></a>
                        <ul class="child-list">
                            <li class="active"><a href="../pages/dashboard-pfo.php"><i class="mdi mdi-clipboard-alert"></i> Pending Applicants</a></li>
                            <li><a href="../pages/dash-approved-pfo.php"><i class="mdi mdi-clipboard-check"></i> Approved Applicants</a></li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="#" disabled><i class="mdi mdi-chart-areaspline"></i> <span>Reports</span></a>
                    </li>
                    <li>
                        <h3 class="navigation-title">Auxilliaries</h3>
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
                    <a href="../pages/dashboard-pfo">
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
                <div class="page-head">
                    <h4 class="mt-2 mb-2">Dashboard</h4>
                </div>

                <!--end row-->
                <div class="row">
                    <div class="col-lg-12 col-sm-12">
                        <div class="card m-b-30">
                            <div class="card-header bg-primary text-white">
                                <h5 class="header-title"> PENDING APPLICANTS</h5>
                            </div>
                            <div class="card-body table-responsive">


                                <div class="table-odd">
                                    <table id="pendingpfoTbl" class="table table-bordered">
                                        <thead class="">
                                            <tr>
                                                <th>ID</th>
                                                <th>ESTABLISHMENT NAME</th>
                                                <th>EMAIL ADDRESS</th>
                                                <th>CONTACT NUMBER</th>
                                                <th>DATE APPLIED</th>
                                                <th>STATUS</th>
                                                <th>ACTION (?)</th>

                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>ID</th>
                                                <th>ESTABLISHMENT NAME</th>
                                                <th>EMAIL ADDRESS</th>
                                                <th>CONTACT NUMBER</th>
                                                <th>DATE APPLIED</th>
                                                <th>STATUS</th>
                                                <th>ACTION (?)</th>

                                            </tr>
                                        </tfoot>
                                        <tbody>

                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>







                </div>

            </div>
            <!--end container-->

            <!--footer section start-->
            <footer class="footer">
                2020 &copy; DOLE REGION 10.
            </footer>
            <!--footer section end-->


            <!-- Right Slidebar start -->
            <div class="sb-slidebar sb-right sb-style-overlay">
                <div class="right-bar slimscroll">
                    <span class="r-close-btn sb-close"><i class="fa fa-times"></i></span>

                    <ul class="nav nav-tabs nav-justified-">
                        <li class="">
                            <a href="#chat" class="active" data-toggle="tab">Chat</a>
                        </li>
                        <li class="">
                            <a href="#activity" data-toggle="tab">Activity</a>
                        </li>
                        <li class="">
                            <a href="#settings" data-toggle="tab">Settings</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="chat">
                            <div class="online-chat">
                                <div class="online-chat-container">
                                    <div class="chat-list">
                                        <form class="search-content" action="../pages/dashboard-pfo" method="post">
                                            <input type="text" class="form-control" name="keyword" placeholder="Search...">
                                            <span class="search-button"><i class="ti ti-search"></i></span>
                                        </form>
                                    </div>
                                    <div class="side-title-alt">
                                        <h2>online</h2>
                                    </div>

                                    <ul class="team-list chat-list-side">
                                        <li>
                                            <a href="#" class="ml-3">
                                                <span class="thumb-small">
                                                    <img class="rounded-circle" src="../assets/images/users/avatar-1.jpg" alt="">
                                                    <i class="online dot"></i>
                                                </span>
                                                <div class="inline">
                                                    <span class="name">Alison Jones</span>
                                                    <small class="text-muted">Start exploring</small>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="ml-3">
                                                <span class="thumb-small">
                                                    <img class="rounded-circle" src="../assets/images/users/avatar-3.jpg" alt="">
                                                    <i class="online dot"></i>
                                                </span>
                                                <div class="inline">
                                                    <span class="name">Jonathan Smith</span>
                                                    <small class="text-muted">Alien Inside</small>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="ml-3">
                                                <span class="thumb-small">
                                                    <img class="rounded-circle" src="../assets/images/users/avatar-4.jpg" alt="">
                                                    <i class="away dot"></i>
                                                </span>
                                                <div class="inline">
                                                    <span class="name">Anjelina Doe</span>
                                                    <small class="text-muted">Screaming...</small>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="ml-3">
                                                <span class="thumb-small">
                                                    <img class="rounded-circle" src="../assets/images/users/avatar-5.jpg" alt="">
                                                    <i class="busy dot"></i>
                                                </span>
                                                <div class="inline">
                                                    <span class="name">Franklin Adam</span>
                                                    <small class="text-muted">Don't lose the hope</small>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="ml-3">
                                                <span class="thumb-small">
                                                    <img class="rounded-circle" src="../assets/images/users/avatar-6.jpg" alt="">
                                                    <i class="online dot"></i>
                                                </span>
                                                <div class="inline">
                                                    <span class="name">Jeff Crowford </span>
                                                    <small class="text-muted">Just flying</small>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>

                                    <div class="side-title-alt mb-3">
                                        <h2>Friends</h2>
                                    </div>
                                    <ul class="list-unstyled friends">
                                        <li>
                                            <a href="#">
                                                <img class="rounded-circle" src="../assets/images/users/avatar-7.jpg" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img class="rounded-circle" src="../assets/images/users/avatar-8.jpg" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img class="rounded-circle" src="../assets/images/users/avatar-9.jpg" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img class="rounded-circle" src="../assets/images/users/avatar-10.jpg" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img class="rounded-circle" src="../assets/images/users/avatar-2.jpg" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img class="rounded-circle" src="../assets/images/users/avatar-1.jpg" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img class="rounded-circle" src="../assets/images/users/avatar-3.jpg" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img class="rounded-circle" src="../assets/images/users/avatar-4.jpg" alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div role="tabpanel" class="tab-pane " id="activity">

                            <div class="aside-widget">
                                <div class="side-title-alt">
                                    <h2>Recent Activity</h2>
                                </div>
                                <ul class="team-list chat-list-side info">
                                    <li>
                                        <span class="thumb-small">
                                            <i class="fa fa-pencil"></i>
                                        </span>
                                        <div class="inline">
                                            <span class="name">Mary Brown open a new company</span>
                                            <span class="time">just now</span>
                                        </div>
                                    </li>
                                    <li>
                                        <span class="thumb-small">
                                            <i class="fa fa-user-plus"></i>
                                        </span>
                                        <div class="inline">
                                            <span class="name">Mary Brown send a new message </span>
                                            <span class="time">50 min ago</span>
                                        </div>
                                    </li>
                                    <li>
                                        <span class="thumb-small">
                                            <i class="fa fa-wrench"></i>
                                        </span>
                                        <div class="inline">
                                            <span class="name">Holly Cobb Uploaded 6 new photos.</span>
                                            <span class="time">3 Week Ago</span>
                                        </div>
                                    </li>
                                    <li>
                                        <span class="thumb-small">
                                            <i class="fa fa-users"></i>
                                        </span>
                                        <div class="inline">
                                            <span class="name">Mary Brown open a new company.</span>
                                            <span class="time">1 Month Ago</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="aside-widget">

                                <div class="side-title-alt">
                                    <h2>Events</h2>
                                </div>
                                <ul class="team-list chat-list-side info statistics border-less-list">
                                    <li>
                                        <div class="inline">
                                            <p class="mb-1">Jamie Miller</p>
                                            <span class="name">Contrary to popular belief, Lorem Ipsum is not simply random text.</span>
                                            <span class="time text-muted">2 Week Ago</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="inline">
                                            <p class="mb-1">Robert Jones</p>
                                            <span class="name">Lorem Ipsum is simply dummy text of the printing and typesetting .</span>
                                            <span class="time text-muted">1 Month Ago</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div role="tabpanel" class="tab-pane " id="settings">
                            <div class="side-title-alt">
                                <h6 class="mb-0">Account Setting</h6>
                            </div>
                            <ul class="team-list chat-list-side info statistics border-less-list setting-list">
                                <li>
                                    <div class="inline">
                                        <span class="name">Auto updates</span>
                                    </div>
                                    <span class="thumb-small">
                                        <input type="checkbox" checked data-plugin="switchery" data-color="#079c9e" data-size="small" />
                                    </span>
                                </li>
                                <li>
                                    <div class="inline">
                                        <span class="name">Show offline Contacts</span>
                                    </div>
                                    <span class="thumb-small">
                                        <input type="checkbox" checked data-plugin="switchery" data-color="#079c9e" data-size="small" />
                                    </span>
                                </li>

                                <li>
                                    <div class="inline">
                                        <span class="name">Location Permission</span>
                                    </div>
                                    <span class="thumb-small">
                                        <input type="checkbox" checked data-plugin="switchery" data-color="#079c9e" data-size="small" />
                                    </span>
                                </li>
                            </ul>

                            <div class="side-title-alt">
                                <h6 class="mb-0">General Setting</h6>
                            </div>
                            <ul class="team-list chat-list-side info statistics border-less-list setting-list">
                                <li>
                                    <div class="inline">
                                        <span class="name">Show me Online</span>
                                    </div>
                                    <span class="thumb-small">
                                        <input type="checkbox" checked data-plugin="switchery" data-color="#079c9e" data-size="small" />
                                    </span>
                                </li>
                                <li>
                                    <div class="inline">
                                        <span class="name">Status visible to all</span>
                                    </div>
                                    <span class="thumb-small">
                                        <input type="checkbox" checked data-plugin="switchery" data-color="#079c9e" data-size="small" />
                                    </span>
                                </li>

                                <li>
                                    <div class="inline">
                                        <span class="name">Notifications</span>
                                    </div>
                                    <span class="thumb-small">
                                        <input type="checkbox" checked data-plugin="switchery" data-color="#079c9e" data-size="small" />
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--end Right Slidebar-->
        </div>
        <!--end body content-->
    </section>

    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="../pages/dashboard-pfo" method="post">
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <input type="submit" class="btn btn-primary" value="Logout" name="signoutpfo">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- jQuery -->

    <script>
        $(document).ready(function() {
            fetch_data1();


            function fetch_data1() {
                var dataTable = $('#pendingpfoTbl').DataTable({
                    "processing": true,
                    "serverSide": true,
                    "columnDefs": [{
                        "orderable": false,
                        "targets": [0, 1]
                    }],
                    "order": [],
                    "ajax": {
                        url: "../pages/dashboard-pfo-fetch.php",
                        type: "POST"
                    }
                });
            }




        });
    </script>

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