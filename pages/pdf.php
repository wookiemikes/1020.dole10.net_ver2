<?php
include '../db/server.php';

// HTML to PDF conversion
if(isset($_POST["print"])){
	$tin = $_POST['tin'];
	$oat_head = $_POST['oat_head'];
	$query = "SELECT * FROM `user_details_tbl` JOIN user_app_details ON user_details_tbl.id_diff = user_app_details.id_diff JOIN user_emp_details_tbl ON user_app_details.id_diff = user_emp_details_tbl.id_diff JOIN user_est_details_tbl ON user_est_details_tbl.id_diff = user_emp_details_tbl.id_diff WHERE user_details_tbl.id_diff = '" . $tin . "'";
	$result = mysqli_query($connect,$query);
	while ($list = mysqli_fetch_assoc($result)) {
        $ud_tin = $list["ud_tin"];
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
	
	}
	if ($result){
	require_once('../tcpdf/tcpdf.php');// imports tcpdf library
	class MYPDF extends TCPDF {

    //Page header
    public function Header() {
        $this->SetFont('helvetica', '', 8);
        // Title
		$content = '<p align="center">
				<br />
				<br />
				<br />
				REPUBLIC OF THE PHILIPPINES <br />
				DEPARTMENT OF LABOR AND EMPLOYMENT <br />
				Regional Office No. ______ <br />
				<br>
				<br>
				<br>
				
				<h2 align="center">Registration of Establishment</h2>'; 
		$this->writeHTML($content);  
		$this->setImageScale(PDF_IMAGE_SCALE_RATIO);
		$this->Image('../assets1/img/labor.png', 35, 19, 20, 20, 'PNG', '', '', true, 200, '', false, false, 1, false, false, false);
     
    }
}

	$obj_pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
	$obj_pdf->SetCreator(PDF_CREATOR);  
	$obj_pdf->SetTitle("profile_pdf");  
	$obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
	$obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
	$obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
	$obj_pdf->SetDefaultMonospacedFont('helvetica');  
	$obj_pdf->SetFooterMargin('15');  
	$obj_pdf->setHeaderMargin(3);
	$obj_pdf->setPrintFooter(false);  
	$obj_pdf->SetMargins(PDF_MARGIN_LEFT, '40', PDF_MARGIN_RIGHT);  
	$obj_pdf->SetAutoPageBreak(TRUE, 10);  
	$obj_pdf->SetFont('helvetica', '', 8);  
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
	 	<br>
		<br>
		<tr>
			<td></td>
			<td></td>
			<td><b>EIN:  </b>'.$uad_ein.'</td>
		</tr><br />
		<tr>
			<td style="width: 50%"><b>1. Name of Establishment:   </b>  '.$ud_est_name.'</td>
		</tr><br />
		<tr>
			<td style="width: 50%"><b>2. Address:   </b>  '.$ud_ct.'</td>
			<td style="width: 50%"><b> Province:   </b>  '.$ud_prov.'</td>
		</tr><br />
		<tr>
			<td style="width: 50%"><b>3. TIN:   </b>  '.$ud_tin.'</td>
		</tr><br />
		<tr>
			<td style="width: 33.33%"><b>4. Telephone No. :   </b>  '.$ud_contact.'</td>
			<td style="width: 33.33%"><b> Fax No:   </b>  '.$ud_fax.'</td>
			<td style="width: 33.33%"><b> Email:   </b>  '.$ud_email.'</td>
		</tr><br>
		<tr>
			<td style="width: 50%"><b>5. Name of Manager:     </b>  '.$ud_manager.'</td>
		</tr><br>
		<tr>
			<td style="width: 85%"><b>6. Nature of Business & Product Manufactured, Service rendered or mechandise sold.</b> <i>(Example Manufacturing, Construction, Agriculture, Forestry, Services, Commerce.)</i> :    '.$est_businesstype.'</td>
		</tr><br>
		<tr>
			<td><b>7. Number of Employees: </b></td>
		</tr><br>
		<tr>
			<td style="width: 10.5%"></td>
			<td style="width: 10.5% border-collapse: collapse; border: 0.5px solid black;">Total</td>
			<td style="width: 10.5% border-collapse: collapse; border: 0.5px solid black;">Filipinos</td>
			<td style="width: 10.5% border-collapse: collapse; border: 0.5px solid black;">Resident Alien</td>
			<td style="width: 10.5% border-collapse: collapse; border: 0.5px solid black;">Non-Resident Alien</td>
			<td style="width: 10.5% border-collapse: collapse; border: 0.5px solid black;">Below 15</td>
			<td style="width: 10.5% border-collapse: collapse; border: 0.5px solid black;">Below 15-17 yrs</td>
			<td style="width: 10.5% border-collapse: collapse; border: 0.5px solid black;">18-30 yrs</td>
			<td style="width: 10.5% border-collapse: collapse; border: 0.5px solid black;">Above 30 yrs</td>
		</tr>
		<tr>
			<td style="width: 10.5% border-collapse: collapse; border: 0.5px solid black;">Male</td>
			<td style="width: 10.5% border-collapse: collapse; border: 0.5px solid black;">'.$ued_total_male.'</td>
			<td style="width: 10.5% border-collapse: collapse; border: 0.5px solid black;">'.$ued_m_filipinos.'</td>
			<td style="width: 10.5% border-collapse: collapse; border: 0.5px solid black;">'.$ued_m_resalien.'</td>
			<td style="width: 10.5% border-collapse: collapse; border: 0.5px solid black;">'.$ued_m_nralien.'</td>
			<td style="width: 10.5% border-collapse: collapse; border: 0.5px solid black;">'.$ued_m_minor_a.'</td>
			<td style="width: 10.5% border-collapse: collapse; border: 0.5px solid black;">'.$ued_m_minor_b.'</td>
			<td style="width: 10.5% border-collapse: collapse; border: 0.5px solid black;">'.$ued_m_18_30.'</td>
			<td style="width: 10.5% border-collapse: collapse; border: 0.5px solid black;">'.$ued_m_abv_30.'</td>
		</tr>
		<tr>
			<td style="width: 10.5% border-collapse: collapse; border: 0.5px solid black;">Female</td>
			<td style="width: 10.5% border-collapse: collapse; border: 0.5px solid black;">'.$ued_total_fmale.'</td>
			<td style="width: 10.5% border-collapse: collapse; border: 0.5px solid black;">'.$ued_f_filipinos.'</td>
			<td style="width: 10.5% border-collapse: collapse; border: 0.5px solid black;">'.$ued_f_resalien.'</td>
			<td style="width: 10.5% border-collapse: collapse; border: 0.5px solid black;">'.$ued_f_nralien.'</td>
			<td style="width: 10.5% border-collapse: collapse; border: 0.5px solid black;">'.$ued_f_minor_a.'</td>
			<td style="width: 10.5% border-collapse: collapse; border: 0.5px solid black;">'.$ued_f_minor_b.'</td>
			<td style="width: 10.5% border-collapse: collapse; border: 0.5px solid black;">'.$ued_f_18_30.'</td>
			<td style="width: 10.5% border-collapse: collapse; border: 0.5px solid black;">'.$ued_f_abv_30.'</td>
		</tr>
		<tr>
			<td style="width: 10.5% border-collapse: collapse; border: 0.5px solid black;">Grand Total</td>
			<td style="width: 10.5% border-collapse: collapse; border: 0.5px solid black;">'.$ued_total.'</td>
			<td style="width: 10.5% border-collapse: collapse; border: 0.5px solid black;">'.$ued_t_filipinos.'</td>
			<td style="width: 10.5% border-collapse: collapse; border: 0.5px solid black;">'.$ued_t_resalien.'</td>
			<td style="width: 10.5% border-collapse: collapse; border: 0.5px solid black;">'.$ued_t_nralien.'</td>
			<td style="width: 10.5% border-collapse: collapse; border: 0.5px solid black;">'.$ued_t_minor_a.'</td>
			<td style="width: 10.5% border-collapse: collapse; border: 0.5px solid black;">'.$ued_t_minor_b.'</td>
			<td style="width: 10.5% border-collapse: collapse; border: 0.5px solid black;">'.$ued_t_18_30.'</td>
			<td style="width: 10.5% border-collapse: collapse; border: 0.5px solid black;">'.$ued_t_abv_30.'</td>
		</tr><br>
		<tr>
			<td style="width: 50%"></td>
			<td style="width: 50%"></td>
		</tr><br>
		<tr>
			<td><b>9. Technical Information</b><i>(List/ Enumerate) :</i></td>
		</tr><br>
		<tr>
			<td style="width: 05%"></td>
			<td style="width: 45%"><b>9a. Machinery, Equipment and Other Devices in Use:  </b> </td>
			<td style="width: 50%">'.$uet_machine_eq.'</td>
		</tr>
		<tr>
			<td style="width: 05%"></td>
			<td style="width: 40%"><b>9b. Materials Handling Equipment:  </b></td>
			<td style="width: 50%">'.$uet_material_eq.'</td>
		</tr><br>
		<tr>
			<td style="width: 05%"></td>
			<td style="width: 40%"><b>9c. Chemical or Substance Used or Handled:  </b> '.$uet_chemical.'</td>
			<td style="width: 50%"></td>
		</tr><br>
		<tr>
			<td style="width: 85%"><b>10. If Branch Unit, name of parent establishment: </b></td>
		</tr><br>
		<tr>
			<td style="width: 50%"><b>11. Current Capitalization:   </b> '.$uet_capital.'</td>
			<td style="width: 50%"><b> Total Assets:  </b>'.$uet_assets.' </td>
		</tr><br>
		<tr>
			<td style="width: 85%"><b>12. Photocopy of DTI Certificate of Recognition/ Business Permits.</b><i>(pls. attach)</i></td>
		</tr>
		<br>
		<br>
		<br>
		<tr>
			<td><b>FOR RE-REGISTRATION ACCOMPLISH ALSO:</b></td>
		</tr><br>
		<tr>
			<td style="width: 50%"><b>13. Past Application Number: </b></td>
			<td style="width: 50%"><b> Date of Application: </b></td>
		</tr><br>
		<tr>
			<td style="width: 85%"><b>14. If changing name of establishment, State former Name:</b></td>
		</tr><br>
		<tr>
			<td style="width: 85%"><b>15. If changing location, give past address</b></td>
		</tr><br>

		<br>
		<br>
		<br>

		<tr>
			<td style="width: 85%">I hereby certify that the above information is true and correct</td>
		</tr>
		<br>
		<tr>
			<td style="width: 33.33%"></td>
			<td style="width: 33.33%"></td>
			<td style="width: 33.33%">'.$ud_manager. '</td>
		</tr>
		
		<tr>
			<td style="width: 33.33%"></td>
			<td style="width: 33.33%"></td>
			<td style="width: 33.33%"><b>Owner/President</b></td>
		</tr>
		<tr>
			<td style="width: 33.33%"></td>
			<td style="width: 33.33%"></td>
			<td style="width: 33.33%"></td>
		</tr>
		<br>
		<tr>	
			<td style="width: 25%"><b>Date Filed: </b>'.$uad_date_filed.'</td>
			<td style="width: 25%"><b>Date Approved:</b>'.$uad_date_approved.' </td>
			<td style="width: 25%"><b>Approved by: </b></td>
			<td style="width: 25%"></td>
		</tr>
		<tr>
			<td style="width: 25%"></td>
			<td style="width: 25%"></td>
			<td style="width: 11%"></td>
			<td style="width: 34%">'.$oat_head.'</td>
			<td style="width: 5%"></td>
		</tr>
		<tr>
			<td style="width: 25%"></td>
			<td style="width: 25%"></td>
			<td style="width: 11%"></td>
			<td style="width: 34%">(Regional Director or Assistant Regional Director or Head of Field Office)</td>
			<td style="width: 5%"></td>
		</tr>


	



 
	 
	';  

	$content .= '</table>';  
	$obj_pdf->writeHTML($content);
	ob_end_clean();
	$obj_pdf->Output('1020_applicant.pdf', 'I');  
	}
}
