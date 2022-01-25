<?php
session_start();
//$connect = mysqli_connect("localhost", "d0l310_1020db", "d0l310_1020db", "d0l310_1020db");
$connect = mysqli_connect("localhost", "root", "", "d0l310_1020db");

$columns = array('ud_id', 'ud_est_name', 'ud_ct', 'ud_st', 'ud_prov', 'uad_date_filed', 'uad_date_approved', 'ua_status');

$query = "SELECT * FROM `user_details_tbl` WHERE ua_status ='APPROVED' ";

if (isset($_POST["search"]["value"])) {
    $query .= '

    AND (ud_id  = "%' . $_POST["search"]["value"] . '%"
    OR ud_est_name  = "%' . $_POST["search"]["value"] . '%"
	OR ud_ct LIKE "%' . $_POST["search"]["value"] . '%" 
    OR ud_st LIKE "%' . $_POST["search"]["value"] . '%" 
    OR ua_status LIKE "%' . $_POST["search"]["value"] . '%" 
    OR uad_date_filed LIKE "%' . $_POST["search"]["value"] . '%"
    OR uad_date_approved LIKE "%' . $_POST["search"]["value"] . '%"
    OR ud_prov LIKE "%' . $_POST["search"]["value"] . '%")
	';
}

if (isset($_POST["order"])) {
    $query .= 'ORDER BY ' . $columns[$_POST['order']['0']['column']] . ' ' . $_POST['order']['0']['dir'] . '';
} else {
    $query .= 'ORDER BY ud_id ASC ';
}

$query1 = '';

if ($_POST["length"] != -1) {
    $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$number_filter_row = mysqli_num_rows(mysqli_query($connect, $query));

$result = mysqli_query($connect, $query . $query1);

$data = array();

while ($row = mysqli_fetch_array($result)) {




    $sub_array = array();
    
    $sub_array[] = $row["ud_est_name"];
    $sub_array[] = $row["ud_st"];
    $sub_array[] = $row["ud_ct"];
    $sub_array[] = $row["ud_prov"];
    $sub_array[] = $row["uad_date_approved"];
    
    $data[] = $sub_array;
}
function get_all_data($connect)
{
    $query = "SELECT * FROM `user_details_tbl`";
    $result = mysqli_query($connect, $query);
    return mysqli_num_rows($result);
}

$output = array(
    "draw"    => intval($_POST["draw"]),
    "recordsTotal"  =>  get_all_data($connect),
    "recordsFiltered" => $number_filter_row,
    "data"    => $data
);

echo json_encode($output);
