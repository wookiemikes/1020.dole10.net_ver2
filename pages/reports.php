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
                    <li>
                        <a href="../pages/dashboard"><i class="mdi mdi-gauge"></i> <span>Dashboard</span></a>
                    </li>
                    <li class="">
                        <a href="../pages/list"><i class="mdi mdi-check-circle"></i> <span>Inspectors</span></a>
                    </li>
                    <li class="active">
                        <a href="../pages/reports"><i class="mdi mdi-chart-areaspline"></i> <span>Reports</span></a>
                    </li>
                    <li>
                        <h3 class="navigation-title">Auxilliaries</h3>
                    </li>
                    <li class=""><a href="../pages/logs"><i class="mdi mdi-receipt"></i> <span>Audit Logs</span></a>

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
                    <a href="index.html">
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
                                    <a class="dropdown-item" href="#"><i class="mdi mdi-logout m-r-5 text-muted"></i> Logout</a>
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
                <div class="row">
                    <div class="col-lg-12 col-sm-12">
                        <div class="row">
                            <div class="col-lg-3 col-sm-3">
                                <div class="widget-box bg-white m-b-30">
                                    <div class="row d-flex align-items-center">
                                        <div class="col-4">
                                            <div class="text-center"><i class="ti ti-eye"></i></div>
                                        </div>
                                        <div class="col-4">
                                            <div class="dynamicbar">Loading..</div>
                                        </div>
                                        <div class="col-4">
                                            <h2 class="m-0 counter">145</h2>
                                            <p>Visits Today</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-3">
                                <div class="widget-box bg-white m-b-30">
                                    <div class="row d-flex align-items-center text-center">
                                        <div class="col-4">
                                            <div class="text-center"><i class="ti ti-user"></i></div>
                                        </div>
                                        <div class="col-4">
                                            <div class="inlinesparkline">Loading..</div>
                                        </div>
                                        <div class="col-4">
                                            <h2 class="m-0 counter">946</h2>
                                            <p>Visits Today</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-3">
                                <div class="widget-box bg-white m-b-30">
                                    <div class="row d-flex align-items-center">
                                        <div class="col-4">
                                            <div class="text-center"><i class="ti ti-money"></i></div>
                                        </div>
                                        <div class="col-4">
                                            <div class="dynamicbar">Loading..</div>
                                        </div>
                                        <div class="col-4">
                                            <h2 class="m-0 counter">548</h2>
                                            <p>Visits Today</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-3">
                                <div class="widget-box bg-white m-b-30">
                                    <div class="row d-flex align-items-center">
                                        <div class="col-4">
                                            <div class="text-center"><i class="ti ti-wallet"></i></div>
                                        </div>
                                        <div class="col-4">
                                            <div class="inlinesparkline">Loading..</div>
                                        </div>
                                        <div class="col-4">
                                            <h2 class="m-0 counter">999</h2>
                                            <p>Visits Today</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end row-->
                <div class="row">

                    <div class="col-lg-12 col-sm-12">
                        <div class="card m-b-30">
                            <div class="card-body table-responsive">
                                <h5 class="header-title">APPROVED APPLICANTS</h5>
                                <p class="text-muted">DataTables has most features enabled by default, so all you need to do to use it with your own ables is to call the construction function: <code>$().DataTable();</code>.</p>
                                <div class="table-odd">
                                    <table id="logsTable" class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>$320,800</td>
                                            </tr>
                                            <tr>
                                                <td>Garrett Winters</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>63</td>
                                                <td>2011/07/25</td>
                                                <td>$170,750</td>
                                            </tr>
                                            <tr>
                                                <td>Ashton Cox</td>
                                                <td>Junior Technical Author</td>
                                                <td>San Francisco</td>
                                                <td>66</td>
                                                <td>2009/01/12</td>
                                                <td>$86,000</td>
                                            </tr>
                                            <tr>
                                                <td>Cedric Kelly</td>
                                                <td>Senior Javascript Developer</td>
                                                <td>Edinburgh</td>
                                                <td>22</td>
                                                <td>2012/03/29</td>
                                                <td>$433,060</td>
                                            </tr>

                                            <tr>
                                                <td>Colleen Hurst</td>
                                                <td>Javascript Developer</td>
                                                <td>San Francisco</td>
                                                <td>39</td>
                                                <td>2009/09/15</td>
                                                <td>$205,500</td>
                                            </tr>
                                            <tr>
                                                <td>Sonya Frost</td>
                                                <td>Software Engineer</td>
                                                <td>Edinburgh</td>
                                                <td>23</td>
                                                <td>2008/12/13</td>
                                                <td>$103,600</td>
                                            </tr>
                                            <tr>
                                                <td>Jena Gaines</td>
                                                <td>Office Manager</td>
                                                <td>London</td>
                                                <td>30</td>
                                                <td>2008/12/19</td>
                                                <td>$90,560</td>
                                            </tr>
                                            <tr>
                                                <td>Quinn Flynn</td>
                                                <td>Support Lead</td>
                                                <td>Edinburgh</td>
                                                <td>22</td>
                                                <td>2013/03/03</td>
                                                <td>$342,000</td>
                                            </tr>
                                            <tr>
                                                <td>Charde Marshall</td>
                                                <td>Regional Director</td>
                                                <td>San Francisco</td>
                                                <td>36</td>
                                                <td>2008/10/16</td>
                                                <td>$470,600</td>
                                            </tr>
                                            <tr>
                                                <td>Haley Kennedy</td>
                                                <td>Senior Marketing Designer</td>
                                                <td>London</td>
                                                <td>43</td>
                                                <td>2012/12/18</td>
                                                <td>$313,500</td>
                                            </tr>
                                            <tr>
                                                <td>Tatyana Fitzpatrick</td>
                                                <td>Regional Director</td>
                                                <td>London</td>
                                                <td>19</td>
                                                <td>2010/03/17</td>
                                                <td>$385,750</td>
                                            </tr>
                                            <tr>
                                                <td>Michael Silva</td>
                                                <td>Marketing Designer</td>
                                                <td>London</td>
                                                <td>66</td>
                                                <td>2012/11/27</td>
                                                <td>$198,500</td>
                                            </tr>
                                            <tr>
                                                <td>Paul Byrd</td>
                                                <td>Chief Financial Officer (CFO)</td>
                                                <td>New York</td>
                                                <td>64</td>
                                                <td>2010/06/09</td>
                                                <td>$725,000</td>
                                            </tr>
                                            <tr>
                                                <td>Gloria Little</td>
                                                <td>Systems Administrator</td>
                                                <td>New York</td>
                                                <td>59</td>
                                                <td>2009/04/10</td>
                                                <td>$237,500</td>
                                            </tr>
                                            <tr>
                                                <td>Bradley Greer</td>
                                                <td>Software Engineer</td>
                                                <td>London</td>
                                                <td>41</td>
                                                <td>2012/10/13</td>
                                                <td>$132,000</td>
                                            </tr>
                                            <tr>
                                                <td>Dai Rios</td>
                                                <td>Personnel Lead</td>
                                                <td>Edinburgh</td>
                                                <td>35</td>
                                                <td>2012/09/26</td>
                                                <td>$217,500</td>
                                            </tr>
                                            <tr>
                                                <td>Jenette Caldwell</td>
                                                <td>Development Lead</td>
                                                <td>New York</td>
                                                <td>30</td>
                                                <td>2011/09/03</td>
                                                <td>$345,000</td>
                                            </tr>
                                            <tr>
                                                <td>Yuri Berry</td>
                                                <td>Chief Marketing Officer (CMO)</td>
                                                <td>New York</td>
                                                <td>40</td>
                                                <td>2009/06/25</td>
                                                <td>$675,000</td>
                                            </tr>
                                            <tr>
                                                <td>Caesar Vance</td>
                                                <td>Pre-Sales Support</td>
                                                <td>New York</td>
                                                <td>21</td>
                                                <td>2011/12/12</td>
                                                <td>$106,450</td>
                                            </tr>
                                            <tr>
                                                <td>Doris Wilder</td>
                                                <td>Sales Assistant</td>
                                                <td>Sidney</td>
                                                <td>23</td>
                                                <td>2010/09/20</td>
                                                <td>$85,600</td>
                                            </tr>
                                            <tr>
                                                <td>Angelica Ramos</td>
                                                <td>Chief Executive Officer (CEO)</td>
                                                <td>London</td>
                                                <td>47</td>
                                                <td>2009/10/09</td>
                                                <td>$1,200,000</td>
                                            </tr>
                                            <tr>
                                                <td>Gavin Joyce</td>
                                                <td>Developer</td>
                                                <td>Edinburgh</td>
                                                <td>42</td>
                                                <td>2010/12/22</td>
                                                <td>$92,575</td>
                                            </tr>

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
                                    <form class="search-content" action="index.html" method="post">
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

    <!-- jQuery -->
    <script src="../assets/js/jquery-3.2.1.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/jquery-migrate.js"></script>
    <script src="../assets/js/modernizr.min.js"></script>
    <script src="../assets/js/jquery.slimscroll.min.js"></script>
    <script src="../assets/js/slidebars.min.js"></script>
    <script src="../assets/js/datatables-demo.js"></script>

    <!--plugins js-->
    <script src="../assets/plugins/counter/jquery.counterup.min.js"></script>
    <script src="../assets/plugins/waypoints/jquery.waypoints.min.js"></script>
    <script src="../assets/plugins/sparkline-chart/jquery.sparkline.min.js"></script>
    <script src="../assets/pages/jquery.sparkline.init.js"></script>

    <script src="../assets/plugins/chart-js/Chart.bundle.js"></script>
    <script src="../assets/plugins/morris-chart/raphael-min.js"></script>
    <script src="../assets/plugins/morris-chart/morris.js"></script>
    <script src="../assets/pages/dashboard-init.js"></script>

    <!-- Responsive and datatable js -->
    <script src="../assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="../assets/plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="../assets/plugins/datatables/responsive.bootstrap4.min.js"></script>


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