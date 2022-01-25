<?php

	  session_start();

	  if (isset($_SESSION['loggedIN'])) {
	    header('Location:../pages/dashboard');
	    exit();
	    # code...
	  }


	if (isset($_POST['loginyay'])) {
		$conn = new mysqli('localhost','d0l310_1020db','d0l310_1020db', 'd0l310_1020db');

		$oat_uname = $_POST['uname'];
		$oat_pwd = $_POST['pwd'];

		$data = $conn->query("SELECT oat_id from office_acc_tbl WHERE oat_uname='$oat_uname' and oat_pwd ='$oat_pwd' and oat_acc_role ='MAIN'");
		if ($data->num_rows >0){
			$_SESSION['loggedIN'] = '1';
            $_SESSION['uname'] = $username;
            header("Location:../pages/dashboard");
			exit;
		}else{
			exit("Login Failed");	
		}
		
	}
