<?php
include '../pages/login-pfo-bck.php';
$true = ",disabled: true;";
$readonly = "readonly"; /*All input type set to readonly*/
$disabled = "disabled"; /*Dropdaown and Date are Disabled*/
$oat_id = $_SESSION['oat_id'];

$sql_prof = "SELECT * FROM `d0l310_1020db` . `office_acc_tbl` WHERE oat_id = '" . $oat_id . "';";
$result = mysqli_query($connect, $sql_prof);
while ($list = mysqli_fetch_assoc($result)) {
    $_SESSION['oat_office_desc'] = $list["oat_office_desc"];
    $_SESSION['oat_head'] = $list["oat_head"];
    $_SESSION['oat_rank'] = $list["oat_rank"];
    $_SESSION['oat_others'] = $list["oat_others"];
    $_SESSION['oat_address'] = $list["oat_address"];
    $_SESSION['oat_uname'] = $list["oat_uname"];
    $_SESSION['oat_email'] = $list["oat_email"];
    $_SESSION['oat_pwd'] = $list["oat_pwd"];
} 
