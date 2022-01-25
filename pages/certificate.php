<?php
include '../db/server.php';
 ob_start();



// HTML to PDF conversion
if(isset($_POST["print"])){
    $tin = $_POST['tin'];
    $oat_head = $_POST['oat_head'];
	$oat_rank = $_POST['oat_rank'];
	$oat_others = $_POST['oat_others'];
	$oat_address = $_POST['oat_address'];
	$oat_email = $_POST['oat_email'];
    $query = "SELECT * FROM `user_details_tbl` JOIN user_app_details ON user_details_tbl.id_diff = user_app_details.id_diff JOIN user_emp_details_tbl ON user_app_details.id_diff = user_emp_details_tbl.id_diff JOIN user_est_details_tbl ON user_est_details_tbl.id_diff = user_emp_details_tbl.id_diff WHERE user_details_tbl.id_diff = '" . $tin . "'";
    $result = mysqli_query($connect, $query);
    while ($list = mysqli_fetch_assoc($result)) {
        $ud_tin = $list["ud_tin"];
		$id_diff =$list["id_diff"];
        $ud_est_name = $list["ud_est_name"];
        $ud_st = $list["ud_st"];
        $ud_ct = $list["ud_ct"];
        $ud_prov = $list["ud_prov"];
        $ud_contact = $list["ud_contact"];
        $ud_fax = $list["ud_fax"];
        $ud_email = $list["ud_email"];
        $ud_manager = $list["ud_manager"];
        $ua_status = $list["ua_status"];
        $uad_date_filed = $list["uad_date_filed"];
        $uad_date_approved = $list["uad_date_approved"];
        $uad_ein = $list["uad_ein"];
        $ued_nob = $list["ued_nob"];
        $ued_product = $list["ued_product"];
        $ued_total_male = $list["ued_total_male"];
        $ued_total_fmale = $list["ued_total_fmale"];
        $ued_total = $list["ued_total"];
        $ued_m_filipinos = $list["ued_m_filipinos"];
        $ued_f_filipinos = $list["ued_f_filipinos"];
        $ued_t_filipinos = $list["ued_t_filipinos"];
        $ued_m_resalien = $list["ued_m_resalien"];
        $ued_f_resalien = $list["ued_f_resalien"];
        $ued_t_resalien = $list["ued_t_resalien"];
        $ued_m_nralien = $list["ued_m_nralien"];
        $ued_f_nralien = $list["ued_f_nralien"];
        $ued_t_nralien = $list["ued_t_nralien"];
        $ued_m_minor_a = $list["ued_m_minor_a"];
        $ued_f_minor_a = $list["ued_f_minor_a"];
        $ued_t_minor_a = $list["ued_t_minor_a"];
        $ued_m_minor_b = $list["ued_m_minor_b"];
        $ued_f_minor_b = $list["ued_f_minor_b"];
        $ued_t_minor_b = $list["ued_t_minor_b"];
        $ued_m_18_30 = $list["ued_m_18_30"];
        $ued_f_18_30 = $list["ued_f_18_30"];
        $ued_t_18_30 = $list["ued_t_18_30"];
        $ued_m_abv_30 = $list["ued_m_abv_30"];
        $ued_f_abv_30 = $list["ued_f_abv_30"];
        $ued_t_abv_30 = $list["ued_t_abv_30"];
        $uet_name_labor = $list["uet_name_labor"];
        $uet_add_labor = $list["uet_add_labor"];
        $uet_blr = $list["uet_blr"];
        $uet_machine_eq = $list["uet_machine_eq"];
        $uet_material_eq = $list["uet_material_eq"];
        $uet_chemical = $list["uet_chemical"];
        $uet_branch = $list["uet_branch"];
        $uet_capital = $list["uet_capital"];
        $uet_assets = $list["uet_assets"];
        $uad_inspector = $list["uad_inspector"];
        $uad_date_inspection = $list["uad_date_inspection"];
        $uad_remarks = $list["uad_remarks"];
        $uad_req_link = $list["uad_req_link"];
        $uad_ein = $list["uad_ein"];
        $uad_focal = $list["uad_focal"];
        $date = date("d");
        $datea = date("M");
        $dateb = date("Y");

		
	}
	if ($result){
	require_once('../tcpdf/tcpdf.php');// imports tcpdf library
	class MYPDF extends TCPDF {

    //Page header
    public function Header() {
        $this->SetFont('helvetica', '', 12);
        // Title
		$content = '<p align="center">
				<br />
				<br />
				<br />
				Republic of the Philippines<br/>
                <b>DEPARTMENT OF LABOR AND EMPLOYMENT</b><br/>
                REGIONAL OFFICE 10<br/>
               '.$oat_office_desc= $_POST['oat_office_desc']; echo $oat_office_desc;'<br/>

				<br>
				<br>
				<br>
                <br>';
		$this->writeHTML($content);  
		$this->setImageScale(PDF_IMAGE_SCALE_RATIO);
		$this->Image('../assets1/img/dolelogogs.png', 35, 19, 20, 20, 'PNG', '', '', true, 200, '', false, false, 1, false, false, false);
		$this->Image('', 153, 19, 20, 20, 'PNG', '', '', true, 200, '', false, false, 1, false, false, false);
     
    }
}

	$obj_pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
	$obj_pdf->SetCreator(PDF_CREATOR);  
	$obj_pdf->SetTitle("certificate_pdf");  
	$obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
	$obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
	$obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
	$obj_pdf->SetDefaultMonospacedFont('helvetica');  
	$obj_pdf->SetFooterMargin('15');  
	$obj_pdf->setHeaderMargin(3);
	$obj_pdf->setPrintFooter(false);  
	$obj_pdf->SetMargins(PDF_MARGIN_LEFT, '40', PDF_MARGIN_RIGHT);  
	$obj_pdf->SetAutoPageBreak(TRUE, 10);  
	$obj_pdf->SetFont('helvetica', '', 12);  
	$obj_pdf->AddPage();  
	$content = '';  
	$content .= '  
	<style>
	table {
		border-collapse: collapse;
		border: 1px solid white;
	}
	</style>
	
	<table>
	    <br>
		<br>
		<br>
	    <tr>
			<td></td>
			<td></td>
			<td><b>EIN NO: </b>'.$uad_ein.'</td>
		</tr><br />
		<tr>
			<td></td>
			<td align="center" style="font-size:18px;">This</td>
			<td></td>
		</tr><br />
		<tr>
		    <td align="center" style="font-size:26px;width:100%;"><b>CERTIFICATE OF REGISTRATION</b></td>
		</tr><br />
		<tr>
			<td align="center" style="font-size:18px;width:100%;">is hereby granted to</td>
		</tr>
		<br />
		<br>
		<br>
		<tr>
		    <td align="center" style="font-size:30px;width:100%;"><u><b>'.$ud_est_name.'</b></u></td>
		</tr>
		<tr>
		    <td align="center" style="font-size:14px;width:100%;">'.$ud_st.','.$ud_ct.','.$ud_prov.'</td>
		</tr>
		<br />
		<br />
		<br />
		<tr>
		    <td align="center" style="font-size:18px;width:100%;">In compliance with Rule 1020 of the Occupational Safety and</td>
		</tr>
		<tr>
		    <td align="center" style="font-size:18px;width:100%;">Health Standards and by virtue of the power vested in the </td>
		</tr>
		<tr>
		    <td align="center" style="font-size:18px;width:100%;">Department of Labor and Employment under Article 162 of the </td>
		</tr>
		<tr>
		    <td align="center" style="font-size:18px;width:100%;">Labor Code of the Philippines.</td>
		</tr>
		<br />
		<br />
		<br />
		<tr>
		    <td align="center" style="font-size:18px;width:100%;">Given this '.$date. 'th day of ' . $datea . ' ' . $dateb . '. </td>
		</tr>
		<br />
		<br />
		<br />
		<br />
		<br />
		<tr>
		    <td align="center" style="font-size:30px;width:100%;"><b><u>'.$oat_head.'</u></b></td>
		</tr>
		<tr>
		    <td align="center" style="font-size:16px;width:100%;">'.$oat_rank.'</td>
		</tr>
		<tr>
		    <td align="center" style="font-size:16px;width:100%;">'.$oat_others.'</td>
		</tr>
		<br />
		<br />
		<br />
		<tr>
		    <td align="center" style="font-size:11px;width:100%;">This Certificate of Registration is valid for the lifetime of the establishment except when there is a change of name,</td>
		</tr>
		<tr>
		    <td align="center" style="font-size:11px;width:100%;"> location, ownership and operating after previous closing, re-registration is needed.</td>
		</tr>
		<tr>
		    <td align="center" style="font-size:11px;width:100%; border-bottom: 1px solid skyblue;"></td>
		</tr>
		<tr>
		    <td align="center" style="font-size:9px;width:100%;"><u><i>'.$oat_address.'</i></u></td>
		</tr>
		<tr>
		    <td align="center" style="font-size:9px;width:100%;">857-2583  '.$oat_email.'    ro10.dole.gov.ph</td>
		</tr>

	


	



 
	 
	';  

	$content .= '</table>';  
	$obj_pdf->writeHTML($content);
	ob_end_clean();
	$obj_pdf->Output('certificate.pdf', 'I');  
	}
}
