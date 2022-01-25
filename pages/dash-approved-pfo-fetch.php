<?php
session_start();
//$connect = mysqli_connect("localhost", "d0l310_1020db", "d0l310_1020db", "d0l310_1020db");
$connect = mysqli_connect("localhost", "root", "", "d0l310_1020db");


$columns = array('ud_id', 'ud_est_name', 'ud_prov', 'ud_email', 'ud_contact', 'ua_status', 'uad_date_filed', 'uad_date_approved', 'id_diff');

$query = "SELECT * FROM `user_details_tbl` WHERE ud_prov ='" . $_SESSION['oat_office_desc'] . "' ";

if (isset($_POST["search"]["value"])) {
    $query .= '

    AND ua_status ="APPROVED"
    AND (ud_id  = "%' . $_POST["search"]["value"] . '%"
    OR ud_est_name  = "%' . $_POST["search"]["value"] . '%"
	OR ud_email LIKE "%' . $_POST["search"]["value"] . '%" 
    OR ud_contact LIKE "%' . $_POST["search"]["value"] . '%" 
    OR ua_status LIKE "%' . $_POST["search"]["value"] . '%" 
    OR uad_date_filed LIKE "%' . $_POST["search"]["value"] . '%"
    OR uad_date_approved LIKE "%' . $_POST["search"]["value"] . '%")
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

    $status = $row["ua_status"];
    if ($status = 'APPROVED') {
        $status = " ";
        $tag = "APPROVED";
        $color = "green";
    }


    $sub_array = array();
    $sub_array[] = $row["uad_ein"];
    $sub_array[] = $row["ud_est_name"];
    $sub_array[] = $row["ud_email"];
    $sub_array[] = $row["uad_date_approved"];
    $sub_array[] = "<b style='color:" . $color . "'><i style='color:green;' class='mdi mdi-alert-circle m-r-5'></i> " . $tag . "</b>";
    $sub_array[] =
        "<form action='../pages/dash-approved-pfo-view' method='POST'>
                      <input type='hidden' name='id' value='" . $row["id_diff"] . "'>
					  <input type='submit' class ='btn btn-sm btn-info btn-block' name ='view' id = 'submit' value ='VIEW (?)'>
					</form> ";
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

?>