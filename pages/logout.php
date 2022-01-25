<?php 

if (isset($_POST['signout'])) {
    session_destroy();
    header("Location:../pages/login");
    exit;
}

if (isset($_POST['signoutpfo'])) {
    session_destroy();
    header("Location:../pages/login-pfo");
    exit;
}