<?php
include "../db/server.php";
$mysqli = new mysqli('localhost', 'd0l310_1020db', 'd0l310_1020db', 'd0l310_1020db');
if (isset($_POST['register'])) {
    $id_diff = $_POST['id_diff'];
    $ud_est_name = mysqli_real_escape_string($mysqli,$_POST['ud_est_name']);
    $ud_st = mysqli_real_escape_string($mysqli,$_POST['ud_st']);
    $ud_ct = mysqli_real_escape_string($mysqli,$_POST['ud_ct']);
    $ud_prov = mysqli_real_escape_string($mysqli,$_POST['ud_prov']);
    $ud_tin = mysqli_real_escape_string($mysqli,$_POST['ud_tin']);
    $ud_contact = mysqli_real_escape_string($mysqli,$_POST['ud_contact']);
    $ud_fax = mysqli_real_escape_string($mysqli,$_POST['ud_fax']);
    $ud_email = mysqli_real_escape_string($mysqli,$_POST['ud_email']);
    $ud_manager = mysqli_real_escape_string($mysqli,$_POST['ud_manager']);
    $ua_status = 'PENDING';
    //
    $ued_nob = mysqli_real_escape_string($mysqli,$_POST['ued_nob']);
    $ued_product = mysqli_real_escape_string($mysqli,$_POST['ued_product']);
    $ued_total_male = mysqli_real_escape_string($mysqli,$_POST['ued_total_male']);
    $ued_total_fmale = mysqli_real_escape_string($mysqli,$_POST['ued_total_fmale']);
    $ued_total = mysqli_real_escape_string($mysqli,$_POST['ued_total']);
    $ued_m_filipinos = mysqli_real_escape_string($mysqli,$_POST['ued_m_filipinos']);
    $ued_f_filipinos = mysqli_real_escape_string($mysqli,$_POST['ued_f_filipinos']);
    //
    $ued_t_filipinos = mysqli_real_escape_string($mysqli,$_POST['ued_t_filipinos']);
    $ued_m_resalien = mysqli_real_escape_string($mysqli,$_POST['ued_m_resalien']);
    $ued_f_resalien = mysqli_real_escape_string($mysqli,$_POST['ued_f_resalien']);
    $ued_t_resalien = mysqli_real_escape_string($mysqli,$_POST['ued_t_resalien']);
    $ued_m_nralien = mysqli_real_escape_string($mysqli,$_POST['ued_m_nralien']);
    $ued_f_nralien = mysqli_real_escape_string($mysqli,$_POST['ued_f_nralien']);
    //
    $ued_t_nralien = mysqli_real_escape_string($mysqli,$_POST['ued_t_nralien']);
    $ued_m_minor_a = mysqli_real_escape_string($mysqli,$_POST['ued_m_minor_a']);
    $ued_f_minor_a = mysqli_real_escape_string($mysqli,$_POST['ued_f_minor_a']);
    $ued_t_minor_a = mysqli_real_escape_string($mysqli,$_POST['ued_t_minor_a']);
    $ued_m_minor_b = mysqli_real_escape_string($mysqli,$_POST['ued_m_minor_b']);
    $ued_f_minor_b = mysqli_real_escape_string($mysqli,$_POST['ued_f_minor_b']);
    $ued_t_minor_b = mysqli_real_escape_string($mysqli,$_POST['ued_t_minor_b']);
    $ued_m_18_30 = mysqli_real_escape_string($mysqli,$_POST['ued_m_18_30']);
    $ued_f_18_30 = mysqli_real_escape_string($mysqli,$_POST['ued_f_18_30']);
    $ued_t_18_30 = mysqli_real_escape_string($mysqli,$_POST['ued_t_18_30']);
    $ued_m_abv_30 = mysqli_real_escape_string($mysqli,$_POST['ued_m_abv_30']);
    $ued_f_abv_30 = mysqli_real_escape_string($mysqli,$_POST['ued_f_abv_30']);
    $ued_t_abv_30 = mysqli_real_escape_string($mysqli,$_POST['ued_t_abv_30']);
    //

    $uet_name_labor = mysqli_real_escape_string($mysqli,$_POST['uet_name_labor']);
    $uet_add_labor = mysqli_real_escape_string($mysqli,$_POST['uet_add_labor']);
    $uet_blr = mysqli_real_escape_string($mysqli,$_POST['uet_blr']);
    $x = $_REQUEST['uet_machine_eq'];
    $uet_machine_eq = implode(", ", $x);
    $y = $_REQUEST['uet_material_eq'];
    $uet_material_eq = implode(", ", $y);  
    $uet_chemical = mysqli_real_escape_string($mysqli,$_POST['uet_chemical']);
    $uet_branch = mysqli_real_escape_string($mysqli,$_POST['uet_branch']);
    $uet_capital = mysqli_real_escape_string($mysqli,$_POST['uet_capital']);
    $uet_assets = mysqli_real_escape_string($mysqli,$_POST['uet_assets']);
    //
    date_default_timezone_set("Asia/Manila");
    $uad_date_filed = date("Y-m-d h:i:sa");
    $uad_date_approved = 'NOT AVAILABLE';
    $uad_remarks = 'NOT AVAILABLE';
    $uad_req_link = mysqli_real_escape_string($mysqli,$_POST['uad_req_link']);
    $uad_inspector = 'NOT AVAILABLE';
    $uad_date_inspection = 'NOT AVAILABLE';
    $uad_ein = 'NOT AVAILABLE';
    $uad_focal = 'NOT AVAILABLE';


    $inserta = $mysqli->query("INSERT INTO `d0l310_1020db`.`user_details_tbl` SET
    ud_est_name = '" . $ud_est_name ."',
    id_diff = '" . $id_diff . "',
    ud_st = '" . $ud_st . "',
    ud_ct = '" . $ud_ct . "',
    ud_prov= '" . $ud_prov . "', 
    ud_tin= '" . $ud_tin . "',
    ud_contact= '" . $ud_contact . "',
    ud_fax= '" . $ud_fax . "',
    ud_email= '" . $ud_email . "',
    ud_manager= '" . $ud_manager . "',
    ua_status= '" . $ua_status . "',
    uad_date_filed	= '" . $uad_date_filed . "',
    uad_date_approved	= '" . $uad_date_approved . "',
    uad_ein = '".$uad_ein."',
    uad_focal = '".$uad_focal."'");
    //
    $insertb = $mysqli->query("INSERT INTO `d0l310_1020db`.`user_emp_details_tbl` SET
    ud_tin = '" . $ud_tin ."',
    id_diff = '" . $id_diff . "',
    ued_nob = '" . $ued_nob . "',
    ued_product = '" . $ued_product . "',
    ued_total_male = '" . $ued_total_male . "',
    ued_total_fmale = '" . $ued_total_fmale . "',
    ued_total = '" . $ued_total . "',
    ued_m_filipinos = '" . $ued_m_filipinos . "',
    ued_f_filipinos = '" . $ued_f_filipinos . "',
    ued_t_filipinos = '" . $ued_t_filipinos . "',
    ued_m_resalien = '" . $ued_m_resalien . "',
    ued_f_resalien = '" . $ued_f_resalien . "',
    ued_t_resalien = '" . $ued_t_resalien . "',
    ued_m_nralien = '" . $ued_m_nralien . "',
    ued_f_nralien = '" . $ued_f_nralien . "',
    ued_t_nralien = '" . $ued_t_nralien . "',
    ued_m_minor_a = '" . $ued_m_minor_a . "',
    ued_f_minor_a = '" . $ued_f_minor_a . "',
    ued_t_minor_a = '" . $ued_t_minor_a . "',
    ued_m_minor_b = '" . $ued_m_minor_b . "',
    ued_f_minor_b = '" . $ued_f_minor_b . "',
    ued_t_minor_b = '" . $ued_t_minor_b . "',
    ued_m_18_30 = '" . $ued_m_18_30 . "',
    ued_f_18_30 = '" . $ued_f_18_30 . "',
    ued_t_18_30 = '" . $ued_t_18_30 . "',
    ued_m_abv_30 = '" . $ued_m_abv_30 . "',
    ued_f_abv_30 = '" . $ued_f_abv_30 . "',
    ued_t_abv_30 = '" . $ued_t_abv_30 . "'");

    $insertc = $mysqli->query("INSERT INTO `d0l310_1020db`.`user_est_details_tbl` SET
    ud_tin = '" . $ud_tin ."',
    id_diff = '" . $id_diff . "',
    uet_name_labor = '" . $uet_name_labor . "',
    uet_add_labor = '" . $uet_add_labor . "',
    uet_blr = '" . $uet_blr . "',
    uet_machine_eq = '" . $uet_machine_eq . "',
    uet_material_eq = '" . $uet_material_eq . "',
    uet_chemical = '" . $uet_chemical . "',
    uet_branch = '" . $uet_branch . "',
    uet_capital = '" . $uet_capital . "',
    uet_assets = '" . $uet_assets . "';");

    $insertd = $mysqli->query("INSERT INTO `d0l310_1020db`.`user_app_details` SET
    ud_tin	= '" . $ud_tin ."',
    id_diff = '" . $id_diff . "',
    uad_inspector	= '" . $uad_inspector . "',
    uad_date_inspection	= '" . $uad_date_inspection . "',
    uad_remarks	= '" . $uad_remarks . "',
    uad_req_link = '" . $uad_req_link . "'");



    if (mysqli_query($connect, $inserta)) {
        //echo "Upload Successful";
    } else {
        // echo "Upload Failed";
    }
    if (mysqli_query($connect, $insertb)) {
        //echo "Upload Successful";
    } else {
        //echo "Upload Failed";
    }
    if (mysqli_query($connect, $insertc)) {
        //echo "Upload Successful";
    } else {
        //echo "Upload Failed";
    }



    if ($insertd) {
?>
        <script type="text/javascript">
            if (window.confirm('You Have Successfully Registered')) {
                window.location.href = '../pages/afterregister.php';
            } else {
                window.confirm('Error, Please Try Again!');
                window.location.href = '../pages/registerclient.php';
            }
        </script>
<?php
    }
}

?>