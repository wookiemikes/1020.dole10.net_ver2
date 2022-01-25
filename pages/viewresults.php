<!DOCTYPE html>
<html lang="en">
<?php
include "../pages/address-scripts.php";
require "../pages/registerclient_input.php";

?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="wookie">
    <meta name="keyword" content="">

    <title>DOLE 1020 | VIEW RESULTS</title>

    <!-- Theme icon -->
    <link rel="shortcut icon" href="../assets/images/doleico.ico">

    <!-- Theme Css -->
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
    <section class="bg-login">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-sm-12">
                    <div class="wrapper-page">
                        <div class="account-pagesz">
                            <div class="account-boxes">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="py-3 text-center">
                                            <img class="d-block mx-auto mb-1" src="../assets/images/1020.gif" alt="" width="150" height="150">
                                            <h2><b>REGISTRATION OF ESTABLISHMENT</b></h2>
                                            <h4><b>LIST OF APPROVED APPLICANTS</b></h4>
                                        </div>
                                        <hr>
                                        <div class="col-lg-12 col-sm-12">
                                            <div class="card m-b-30">
                                                <div class="card-body table-responsive">

                                                    <div class="table-odd">
                                                        <table id="approvedpublic" class="table table-bordered">
                                                            <thead>
                                                                <tr>

                                                                    <th>ESTABLISHMENT NAME</th>
                                                                    <th>STREET ADDRESS</th>
                                                                    <th>CITY/MUNICIPALITY</th>
                                                                    <th>PROVINCIAL OFFICE UNDER</th>
                                                                    <th>DATE APPROVED</th>

                                                                </tr>
                                                            </thead>
                                                            <tfoot>
                                                                <tr>
                                                                    <th>ESTABLISHMENT NAME</th>
                                                                    <th>STREET ADDRESS</th>
                                                                    <th>CITY/MUNICIPALITY</th>
                                                                    <th>PROVINCIAL OFFICE UNDER</th>
                                                                    <th>DATE APPROVED</th>

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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- jQuery -->

    <script>
        $(document).ready(function() {
            fetch_data1();


            function fetch_data1() {
                var dataTable = $('#approvedpublic').DataTable({
                    "processing": true,
                    "serverSide": true,
                    "columnDefs": [{
                        "orderable": false,
                        "targets": [0, 1]
                    }],
                    "order": [],
                    "ajax": {
                        url: "../pages/viewfetch.php",
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






    <!--app js-->
    <script src="../assets/js/jquery.app.js"></script>
</body>

</html>