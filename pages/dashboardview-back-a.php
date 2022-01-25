<?php
include 'server_email.php';
if (isset($_POST['sendApproveBtn'])) {
    $remarks1 = $_POST['remarks1'];
    $emailFrom = $_POST['emailFrom'];
    $emailTo = $_POST['emailTo'];
    $subjectName = $_POST['subjectName'];
    $ein = $_POST["ein"];
    $approvedBy = $_POST["approvedBy"];
    $connect = mysqli_connect("localhost", "d0l310_1020db", "d0l310_1020db", "d0l310_1020db");
    $select_query = "SELECT * FROM `user_details_tbl` JOIN user_app_details ON user_details_tbl.id_diff = user_app_details.id_diff where user_details_tbl.id_diff ='" . $_POST["pud_tin"] . "'";
    $results = mysqli_query($connect, $select_query);
    while ($row = mysqli_fetch_assoc($results)) {
        $ud_est_name = $row['ud_est_name'];
        $ud_id  = $row['ud_id'];
        $ud_tin = $row['ud_tin'];
        $id_diff = $row['id_diff'];
        $uad_ein = $row['uad_ein'];
        $ud_email = $row['ud_email'];
        $ua_status = $row['ua_status'];
        $uad_remarks = $row['uad_remarks'];
        $uad_date_filed = $row['uad_date_filed'];
        $uad_date_approved = $row['uad_date_approved'];
        date_default_timezone_set("Asia/Manila");
        $date_sent = date("M d,Y");
    }
    $query = $connect->query("UPDATE `user_details_tbl` SET	
                uad_ein = '" . $ein . "',
                uad_focal = '" . $approvedBy . "',
                ua_status = 'APPROVED',
                uad_date_approved = '" . date("Y-m-d") . "' WHERE id_diff ='" . $id_diff . "';") or die($connect->error);
    $query2 = $connect->query("UPDATE `user_app_details` SET
        uad_remarks = '" . $remarks1 . "' WHERE id_diff ='" . $id_diff . "'") or die($connect->error);;

    if ($query2) {
        $to = $emailTo;
        $subject = $subjectName;
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: ' . $emailFrom . '<' . $emailFrom . '>' . "\r\n" . 'Reply-To: ' . $emailFrom . "\r\n" . 'X-Mailer: PHP/' . phpversion();
        $remarks1 = '<!doctype html>
			<html lang="en">
			<head>
				<meta charset="UTF-8">
				<meta name="viewport"
					  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
				<meta http-equiv="X-UA-Compatible" content="ie=edge">
				<title>Document</title>
			</head>
			<body>
			<span class="preheader" style="color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0;">' . $remarks1 . '</span>
				<div class="container">
                    
                        Greetings '.$ud_est_name. '
                        <br/>
                        Congratulations! Your application for Rule 1020 has been <p style="color:green;">APPROVED</p>, your Rule 1020 e-Certificate of Registration (eCOR) will be sent to you through email withing the next few days. Additiional remarks of your application :
                            ' . $remarks1 . '<br/>

                        
                        Should you have any concerns or clarifications regarding the application or anything related to the registration, you can contact us through any of the following:<br>
                            <ol>
                            <li>Email : <a href="mailto:dole10.1020email@gmail.com" traget="_blank">dole10.1020email@gmail.com</a></li>
                            <li>Email : <a href="mailto:dole10.technical@gmail.com" traget="_blank">dole10.technical@gmail.com</a></li>
                            <li>Email (BUKIDNON) : <a href="mailto:dole10.bukidnon@gmail.com" traget="_blank">dole10.bukidnon@gmail.com</a></li>
                            <li>Email (LANAO): <a href="mailto:dole10.lanaodelnorte@gmail.com" traget="_blank">dole10.lanaodelnorte@gmail.com</a></li>
                            <li>Email (CAMIGUIN): <a href="mailto:dole10.camiguin1@gmail.com" traget="_blank">dole10.camiguin1@gmail.com</a></li>
                            <li>Email (CDO): <a href="mailto:dole10.cdo@gmail.com" traget="_blank">dole10.cdo@gmail.com</a></li>
                            <li>Email (MISAMIS ORIENTAL): <a href="mailto:dole10.misor@gmail.com" traget="_blank">dole10.misor@gmail.com</a></li>
                            <li>Email (MISAMIS OCCIDENTAL): <a href="mailto:dole10.misocc@gmail.com" traget="_blank">dole10.misocc@gmail.com</a></li>
                            <li>Telephone Number : (088) 882-0154</li>
                            <li>Cellphone Number :
                                <ul>
                                <li> Globe: 0977-114-6526</li>
                                <li> Smart : 0928-233-7806 </li>
                                </ul>
                            </li>
                            </ol>
                            We will keep in touch for the next update. Thank you and have a good day.
                        <br/>

                    
                        Best Regards,<br/>
                        DOLE Region 10 ORES System Administrator
                    ' . $emailFrom . '
                    
				</div>
			</body>
			</html>';
        $result = @mail($to, $subject, $remarks1, $headers);

        echo '<script>alert("Email sent successfully !")</script>';
        echo '<script>window.location.href="../pages/dashboard-pfo.php";</script>';

    }
    
}


//PENDING

if (isset($_POST['sendPendingBtn'])) {
    $remarks1 = $_POST['remarks1'];
    $emailFrom = $_POST['emailFrom'];
    $emailTo = $_POST['emailTo'];
    $subjectName = $_POST['subjectName'];
    $connect = mysqli_connect("localhost", "d0l310_1020db", "d0l310_1020db", "d0l310_1020db");
    $select_query = "SELECT * FROM `user_details_tbl` JOIN user_app_details ON user_details_tbl.ud_tin = user_app_details.ud_tin where user_details_tbl.ud_tin ='" . $_POST["pud_tin"] . "'";
    $results = mysqli_query($connect, $select_query);
    while ($row = mysqli_fetch_assoc($results)
    ) {
        $ud_est_name = $row['ud_est_name'];
        $ud_id  = $row['ud_id'];
        $ud_tin = $row['ud_tin'];
        $id_diff = $row['id_diff'];
        $uad_ein = $row['uad_ein'];
        $ud_email = $row['ud_email'];
        $ua_status = $row['ua_status'];
        $uad_remarks = $row['uad_remarks'];
        $uad_date_filed = $row['uad_date_filed'];
        $uad_date_approved = $row['uad_date_approved'];
        date_default_timezone_set("Asia/Manila");
        $date_sent = date("M d,Y");
    }
    $query = $connect->query("UPDATE `user_details_tbl` SET
        ua_status = 'PENDING' WHERE id_diff ='" . $id_diff . "';") or die($connect->error);
    $query1 = $connect->query("UPDATE `user_app_details` SET
        uad_remarks = '" . $remarks1 . "' WHERE id_diff ='" . $id_diff . "'") or die($connect->error);;

    if ($query1) {
        $to = $emailTo;
        $subject = $subjectName;
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: ' . $emailFrom . '<' . $emailFrom . '>' . "\r\n" . 'Reply-To: ' . $emailFrom . "\r\n" . 'X-Mailer: PHP/' . phpversion();
        $remarks1 = '<!doctype html>
			<html lang="en">
			<head>
				<meta charset="UTF-8">
				<meta name="viewport"
					  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
				<meta http-equiv="X-UA-Compatible" content="ie=edge">
				<title>Document</title>
			</head>
			<body>
			<span class="preheader" style="color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0;">' . $remarks1 . '</span>
				<div class="container">
                    
                        <p>
                        Greetings ' . $ud_est_name . '
                        <br/>
                        <br/>
                        Your application for the Rule 1020 Online Registration of Establishment has been evaluated by our personell. Additiional remarks of your application :
                            ' . $remarks1 . '<br/>


                        <br/>
                        Should you have any concerns or clarifications regarding the application or anything related to the registration, you can contact us through any of the following:<br>
                            <ol>
                            <li>Email : <a href="mailto:dole10.1020email@gmail.com" traget="_blank">dole10.1020email@gmail.com</a></li>
                            <li>Telephone Number : (088) 882-0154</li>
                            <li>Cellphone Number :
                                <ul>
                                <li> Globe: 0977-114-6526</li>
                                <li> Smart : 0928-233-7806 </li>
                                </ul>
                            </li>
                            </ol>
                            We will keep in touch for the next update. Thank you and have a good day.
                        <br/>

                    
                        Best Regards,<br/><br/>
                        DOLE Region 10 ORES System Administrator<br/>
                    ' . $emailFrom . '
                    </p>
                    
				</div>
			</body>
			</html>';
        $result = @mail($to, $subject, $remarks1, $headers);

        echo '<script>alert("Email sent successfully !")</script>';
        echo '<script>window.location.href="../pages/dashboard-pfo.php";</script>';
    }
}
