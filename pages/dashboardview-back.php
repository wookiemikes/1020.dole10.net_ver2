<?php
include 'server_email.php';
require "../phpmailer/PHPMailerAutoload.php";

function smtpmailer($to, $from, $from_name, $subject, $body)
{
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPAuth = true;

    $mail->SMTPSecure = 'ssl';
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 465;
    $mail->Username = 'dole10.1020email@gmail.com';
    $mail->Password = 'd0l34dm;n1020';

    //   $path = 'reseller.pdf';
    //   $mail->AddAttachment($path);

    $mail->IsHTML(true);
    $mail->From = "dole10.1020email@gmail.com";
    $mail->FromName = $from_name;
    $mail->Sender = $from;
    $mail->AddReplyTo($from, $from_name);
    $mail->Subject = $subject;
    $mail->Body = $body;
    $mail->AddAddress($to);
    if (!$mail->Send()) {
        $error = "Please try Later, Error Occured while Processing...";
        return $error;
    } else {
        $error = "Thank You !! Your email is sent.";
        return $error;
    }
}

/*$to = 'dole10.technical@gmail.com';
$from = 'dole10.1020email@gmail.com';
$name = 'Test SPES EMAIL';
$subj = 'PHPMailer 5.2 testing from DomainRacer';
$msg = 'This is mail about testing mailing using PHP.';

$error = smtpmailer($to, $from, $name, $subj, $msg);*/


if (isset($_POST['denies'])) {
    $remarks1 = $_POST['remarks1'];
  //$connect = mysqli_connect("localhost", "d0l310_1020db", "d0l310_1020db", "d0l310_1020db");
    $connect = mysqli_connect("localhost", "root", "", "d0l310_1020db");
    $select_query = "SELECT * FROM `user_details_tbl` JOIN user_app_details ON user_details_tbl.ud_tin = user_app_details.ud_tin where user_details_tbl.ud_tin ='" .$_POST["pud_tin"]. "'";
    $results = mysqli_query($connect, $select_query);
    while ($row = mysqli_fetch_assoc($results)) {
        $ud_est_name = $row['ud_est_name'];
        $ud_id  = $row['ud_id'];
        $ud_tin = $row['ud_tin'];
        $uad_ein = $row['uad_ein'];
        $ud_email = $row['ud_email'];
        $ua_status = $row['ua_status'];
        $uad_remarks = $row['uad_remarks'];
        $uad_date_filed = $row['uad_date_filed'];
        $uad_date_approved = $row['uad_date_approved'];
        date_default_timezone_set("Asia/Manila");
        $date_sent = date("M d,Y");
    }
    $query = $connect->query("UPDATE `user_app_details` SET
        uad_remarks = '" . $remarks1 . "' WHERE ud_tin ='" . $ud_tin . "'") or die($connect->error);
    $query2 = $connect->query("UPDATE `user_details_tbl` SET
        ua_status = 'DENIED' WHERE ud_tin ='" . $ud_tin . "'") or die($connect->error);;
    if ($query2) {

        //echo json_encode(array("statusCode" => 200)); //success
        $to   = $ud_email;
        $from = 'dole10.1020email@gmail.com';
        $name = 'DOLE ORES Administrator';
        $subj = ' Online Establishment Registration Under Rule 1020 Application Status';
        $msg = '<p style="text-align: justify;text-justify: inter-word;">
                Greetings ' .$ud_est_name. '!<br><br>
                As of ' .$date_sent. ' your Application for Rule 1020 : Registration of Establishment in Region 10 has been <b style="color:red;">DENIED</b>. The reason of this Denial states as follows:<br>
                  <b>'.$uad_remarks.'</b>
                <br>
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
              </p>';
        $error = smtpmailer($to, $from, $name, $subj, $msg);
    } else {
        echo json_encode(array("statusCode" => 201)); //error
    }
    mysqli_close($connect);
} else {
}




if (isset($_POST['approvedsubmit'])) {
    $pud_tin = $_POST['pud_tin'];
    $ein = $_POST['ein'];
    $focal = $_POST['focal'];
    $remarks1 = $_POST['remarks1'];
  //$connect = mysqli_connect("localhost", "d0l310_1020db", "d0l310_1020db", "d0l310_1020db");
    $connect = mysqli_connect("localhost", "root", "", "d0l310_1020db");
    $select_query = "SELECT * FROM `user_details_tbl` JOIN user_app_details ON user_details_tbl.ud_tin = user_app_details.ud_tin where user_details_tbl.ud_tin ='" . $pud_tin . "'";
    $results = mysqli_query($connect, $select_query);
    while ($row = mysqli_fetch_assoc($results)) {
        $ud_id  = $row['ud_id'];
        $ud_tin = $row['ud_tin'];
        $ud_est_name = $row['ud_est_name'];
        $ud_email = $row['ud_email'];
        $uad_ein = $row['uad_ein'];
        $ua_status = $row['ua_status'];
        $uad_focal = $row['uad_focal'];
        $uad_remarks = $row['uad_remarks'];
        $uad_date_filed = $row['uad_date_filed'];
        $uad_date_approved = $row['uad_date_approved'];
        date_default_timezone_set("Asia/Manila");
        $date_sent = date("M d,Y");
    }
    $query = $connect->query("UPDATE `user_details_tbl` SET	
                uad_ein = '" . $ein . "',
                uad_focal = '" . $focal . "',
                ua_status = 'APPROVED',
                uad_date_approved = '" . date("Y-m-d") . "' WHERE ud_tin ='" . $ud_tin . "';") or die($connect->error);
    $query1 = $connect->query("UPDATE `user_app_details` SET
        uad_remarks = '".$remarks1."' WHERE ud_tin ='" . $ud_tin . "'") or die($connect->error);;;

if ($query1) {

    //echo json_encode(array("statusCode" => 200)); //success
    $to   = $ud_email;
    $from = 'dole10.1020email@gmail.com';
    $name = 'DOLE ORES Administrator';
    $subj = ' Online Establishment Registration Under Rule 1020 Application Status';
    $msg = '<p>
                Greetings ' . $ud_est_name . '!<br><br>
                Congratulations! As of ' . $date_sent . ' your Application for Rule 1020: Registration of Establishment in Region 10 has been <b>Approved</b>. Your Establishment has been issued with the following:<br>
                <ol>
                  <li>Establishment Identification Number: ' . $uad_ein . ' </li>
                  <li>Date of Approval : ' . $uad_date_approved . '</li>
                  <li>Application Approved by: ' . $uad_focal . '
                  </li>
                </ol>

                <br>
                Your <b>CERTIFICATE OF REGISTRATION</b> will be sent to you by through email. Please be informed that you can also monitor your application status on our website by logging in to your registered account.<br><br>
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
              </p>';
    $error = smtpmailer($to, $from, $name, $subj, $msg);
} else {
    echo json_encode(array("statusCode" => 201)); //error
} mysqli_close($connect);

}else{

}
/*if (isset($_POST['approvedsubmit'])) {
    $pud_tin = $_POST['pud_tin'];
    $ein = $_POST['ein'];
    $focal = $_POST['focal'];
    $remarks1 = $_POST['remarks1'];
    $connect = mysqli_connect("localhost", "root", "", "d0l310_1020db");
    $select_query = "SELECT * FROM `user_details_tbl` JOIN user_app_details ON user_details_tbl.ud_tin = user_app_details.ud_tin where user_details_tbl.ud_tin ='" . $pud_tin . "'";
    $results = mysqli_query($connect, $select_query);
    while ($row = mysqli_fetch_assoc($results)) {
        $ud_id  = $row['ud_id'];
        $ud_tin = $row['ud_tin'];
        $uad_ein = $row['uad_ein'];
        $ud_email = $row['ud_email'];
        $ua_status = $row['ua_status'];
        $uad_focal = $row['uad_focal'];
        $uad_remarks = $row['uad_remarks'];
        $uad_date_filed = $row['uad_date_filed'];
        $uad_date_approved = $row['uad_date_approved'];
        date_default_timezone_set("Asia/Manila");
    }

    $query = $connect->query("UPDATE `user_details_tbl` SET	
                uad_ein = '" . $ein . "',
                uad_focal = '" . $focal . "',
                ua_status = 'APPROVED',
                uad_date_approved = '" . date("Y-m-d h:i:sa") . "' WHERE ud_tin ='" . $pud_tin. "';") or die($connect->error);
    $query1 = $connect->query("UPDATE `user_app_details` SET
        uad_remarks = '" . $remarks1 . "' WHERE ud_tin ='" . $ud_tin . "'") or die($connect->error);;;
    if ($query1) {

        echo json_encode(array("statusCode" => 200)); //success
        $to   = 'dole10.technical@gmail.com';
        $from = 'dole10.1020email@gmail.com';
        $name = 'DOLE ORES Administrator';
        $subj = 'Dole Registration of Establishment - Online Application Status';
        $msg = '<p>
                Greetings ' . $business . '!<br><br>
                As of ' . $date . ' your Application for DO-174 in Region 10 has been <b>Received for Processing</b>. Please be informed that you can also monitor your application status on our website by logging in to your registered account.<br><br>
                Should you have any concerns or clarifications regarding the application or anything related to the registration, you can contact us through any of the following:<br>
                <ol>
                  <li>Email : <a href="mailto:dole10.174x@gmail.com" traget="_blank">dole10.174x@gmail.com</a></li>
                  <li>Telephone Number : (088) 882-0154</li>
                  <li>Cellphone Number :
                    <ul>
                      <li> Globe: 0977-114-6526</li>
                      <li> Smart : 0928-233-7806 </li>
                    </ul>
                  </li>
                </ol>
                We will keep in touch for the next update. Thank you and have a good day.
              </p>';
        $error = smtpmailer($to, $from, $name, $subj, $msg);
    } else {
        //echo json_encode(array("statusCode" => 201)); //error
    }
    mysqli_close($connect);
} else {
}*/
?>