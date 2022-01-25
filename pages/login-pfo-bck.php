<?php
	include '../db/server.php';
	session_start(); 
	if(isset($_POST['loginpfo'])){
    $oat_unamee = $_POST["uname"];
    $oat_pwde= $_POST["pwd"];
	$_SESSION['oat_id'] ="";
	$dbusername = " ";
	$dbpassword = " ";
	$accquery = "SELECT * from office_acc_tbl WHERE oat_uname='".$oat_unamee."' and oat_pwd ='".$oat_pwde."' and oat_acc_role ='PFO'";
	$result = mysqli_query($connect,$accquery);
	$row = mysqli_fetch_array($result);
				$u_name = $row['oat_uname'];
				$p_wd = $row['oat_pwd'];
			if ($oat_unamee==$u_name && $oat_pwde==$p_wd){
				
				$_SESSION['oat_id'] = $row['oat_id'];
                $_SESSION['oat_office_desc'] = $row['oat_office_desc'];
                $_SESSION['oat_uname'] = $row['oat_uname'];
                $_SESSION['oat_pwd'] = $row['oat_pwd'];
				
				$_SESSION['profile_status'] = "Logged In!";
				header('Location: ../pages/dashboard-pfo.php');
				echo "<script>alert( 'Logged In!' );</script>";
									
			}
			else {
				echo "<script>alert('Incorrect Username or Password!');</script>";
			}
	}

	

	
 ?>