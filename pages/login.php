<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="wookie">
    <meta name="keyword" content="">

    <title>DOLE 1020 | LOGIN</title>

    <!-- Theme icon -->
    <link rel="shortcut icon" href="../assets/images/doleico.ico">

    <!-- Theme Css -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/slidebars.min.css" rel="stylesheet">
    <link href="../assets/css/icons.css" rel="stylesheet">
    <link href="../assets/css/menu.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/style.css" rel="stylesheet">
</head>

<body class="sticky-header">
    <section class="bg-login">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12">
                    <div class="wrapper-page">
                        <div class="account-pages">
                            <div class="account-box">
                                <div class="card m-b-30">
                                    <div class="card-body">
                                        <div class="card-title text-center">
                                            <img src="../assets/images/1020.gif" alt="" class="" width="70" height="70">
                                            <h5 class="mt-3"><b>Welcome to 1020 Admin</b></h5>
                                        </div>
                                        <form class="form mt-5 contact-form" method="POST" action="../pages/loginbck">
                                            <div class="form-group ">
                                                <div class="col-sm-12">
                                                    <input class="form-control form-control-line" type="text" placeholder="Username" name="uname" required="required">
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <div class="col-sm-12">
                                                    <input class="form-control form-control-line" type="password" placeholder="Password" name="pwd" required="required">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-12">
                                                    <label class="cr-styled">
                                                        <input type="checkbox" checked>
                                                        <i class="fa"></i>
                                                        Remember me
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-12 mt-4">
                                                    <input type="submit" name="loginyay" class="btn btn-primary btn-block" id="" value="Log In">
                                                </div>
                                            </div>

                                            <div class=" form-group">
                                                <div class="col-sm-12 mt-4 text-center">
                                                    <a href="../pages/login-inspectors"><i class="fa fa-external-link m-r-5"></i> For DoLE Inspectors. Click Here</a>
                                                    <br>
                                                    <a href="../pages/login-pfo"><i class="fa fa-external-link m-r-5"></i> For DoLE PFOs. Click Here</a>
                                                </div>

                                            </div>


                                        </form>
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
    <script src="../assets/js/jquery-3.2.1.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/jquery-migrate.js"></script>
    <script src="../assets/js/modernizr.min.js"></script>
    <script src="../assets/js/jquery.slimscroll.min.js"></script>
    <script src="../assets/js/slidebars.min.js"></script>


    <!--app js-->
    <script src="../assets/js/jquery.app.js"></script>
</body>

</html>