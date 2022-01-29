<?php
session_start();

require '../phpspreadsheet/vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
include '../db/server.php';
$export = new Spreadsheet();
$ud_prov1 = $_POST['ud_prov1'];
$date_app = $_POST['date_app'];
$date_app1 = $_POST['date_app1']; 
$export->setActiveSheetIndex(0);
$query = mysqli_query($connect, "SELECT * FROM `user_details_tbl` JOIN user_app_details ON user_details_tbl.id_diff = user_app_details.id_diff JOIN user_emp_details_tbl ON user_app_details.id_diff = user_emp_details_tbl.id_diff JOIN user_est_details_tbl ON user_est_details_tbl.id_diff = user_emp_details_tbl.id_diff WHERE ua_status = 'APPROVED' AND ud_prov = '" . $ud_prov1 . "' AND uad_date_approved BETWEEN '" . $date_app . "' AND '" . $date_app1 . "'");
$row = 3;
while ($list = mysqli_fetch_object($query)) {

    $export->getActiveSheet()
        ->setCellValue('A' . $row, $list->ud_prov)
        ->setCellValue('B' . $row, $list->ud_est_name)
        ->setCellValue('C' . $row, $list->ud_est_name)
        ->setCellValue('D' . $row, $list->ud_tin)
        ->setCellValue('E' . $row, $list->ud_st)
        ->setCellValue('F' . $row, $list->ud_ct)
        ->setCellValue('G' . $row, $list->ud_manager)
        ->setCellValue('H' . $row, $list->ud_contact)
        ->setCellValue('I' . $row, $list->ud_fax)
        ->setCellValue('J' . $row, $list->ud_email)
        ->setCellValue('K' . $row, $list->ued_nob)
        ->setCellValue('L' . $row, $list->ued_product)
        ->setCellValue('M' . $row, $list->ued_total)
        ->setCellValue('N' . $row, $list->ued_total_male)
        ->setCellValue('O' . $row, $list->ued_total_fmale)
        ->setCellValue('P' . $row, $list->uad_ein)
        ->setCellValue('Q' . $row, $list->uet_name_labor)
        ->setCellValue('R' . $row, $list->uet_add_labor)
        ->setCellValue('S' . $row, $list->uad_date_filed)
        ->setCellValue('T' . $row, $list->uad_date_approved);

    $row++;
}
$export->getActiveSheet()->getColumnDimension('A')->setwidth(20);
$export->getActiveSheet()->getColumnDimension('B')->setwidth(35);
$export->getActiveSheet()->getColumnDimension('C')->setwidth(35);
$export->getActiveSheet()->getColumnDimension('D')->setwidth(35);
$export->getActiveSheet()->getColumnDimension('E')->setwidth(40);
$export->getActiveSheet()->getColumnDimension('F')->setwidth(20);
$export->getActiveSheet()->getColumnDimension('G')->setwidth(20);
$export->getActiveSheet()->getColumnDimension('H')->setwidth(20);
$export->getActiveSheet()->getColumnDimension('I')->setwidth(20);
$export->getActiveSheet()->getColumnDimension('J')->setwidth(20);
$export->getActiveSheet()->getColumnDimension('K')->setwidth(40);
$export->getActiveSheet()->getColumnDimension('L')->setwidth(40);
$export->getActiveSheet()->getColumnDimension('M')->setwidth(10);
$export->getActiveSheet()->getColumnDimension('N')->setwidth(10);
$export->getActiveSheet()->getColumnDimension('O')->setwidth(10);
$export->getActiveSheet()->getColumnDimension('P')->setwidth(20);
$export->getActiveSheet()->getColumnDimension('Q')->setwidth(20);
$export->getActiveSheet()->getColumnDimension('R')->setwidth(40);
$export->getActiveSheet()->getColumnDimension('S')->setwidth(20);
$export->getActiveSheet()->getColumnDimension('T')->setwidth(20);

$export->getActiveSheet()
    ->setCellValue('A1', 'List of Registered Establishments under Rule 1020')
    ->setCellValue('A2', 'PROVINCE REGISTERED')
    ->setCellValue('B2', 'BUSINESS NAME')
    ->setCellValue('C2', 'REGISTERED NAME')
    ->setCellValue('D2', 'TAXPAYERS IDENTIFICATION NUMBER (TIN)')
    ->setCellValue('E2', 'STREET ADDRESS')
    ->setCellValue('F2', 'CITY / MUNICIPALITY')
    ->setCellValue('G2', 'OWNER / MANAGER')
    ->setCellValue('H2', 'CONTACT NUMBER')
    ->setCellValue('I2', 'FAX')
    ->setCellValue('J2', 'EMAIL ADDRESS')
    ->setCellValue('K2', 'NATURE OF BUSINESS')
    ->setCellValue('L2', 'PRODUCTS MANUFACTURED')
    ->setCellValue('M2', 'TOTAL MALE')
    ->setCellValue('N2', 'TOTAL FEMALE')
    ->setCellValue('O2', 'TOTAL EMPLOYEES')
    ->setCellValue('P2', 'ESTABLISHMENT IDENTIFICATION NUMBER (EIN)')
    ->setCellValue('Q2', 'NAME OF LABOR UNION')
    ->setCellValue('R2', 'ADDRESS OF LABOR UNION')
    ->setCellValue('S2', 'DATE OF FILING')
    ->setCellValue('T2', 'DATE OF APPROVAL');



$export->getActiveSheet()->mergeCells('A1:T1');

$export->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal('center');
$export->getActiveSheet()->getStyle('A2:T2')->getAlignment()->setHorizontal('center');

$export->getActiveSheet()->getStyle('A1')->getFill()
    ->setFillType(PhpOffice\PhpSpreadsheet\Style\Fill::FILL_GRADIENT_LINEAR)
    ->setStartColor(new PhpOffice\PhpSpreadsheet\Style\Color(PhpOffice\PhpSpreadsheet\Style\Color::COLOR_BLUE))
    ->setEndColor(new PhpOffice\PhpSpreadsheet\Style\Color(PhpOffice\PhpSpreadsheet\Style\Color::COLOR_WHITE))
    ->setRotation(45);
$export->getActiveSheet()->getStyle('A1')->applyFromArray(
    array(
        'font' => array(
            'size' => 24,
            'bold' => true,
        )
    )
);
$export->getActiveSheet()->getStyle('A2:U2')->applyFromArray(
    array(
        'font' => array(
            'bold' => true
        ),
        'borders' => array(
            'allborders' => array(
                'style' => PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN
            )
        )
    )
);
$export->getActiveSheet()->getStyle('A3:T' . ($row - 1))->applyFromArray(
    array(
        'borders' => array(
            'outline' => array(
                'style' => PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN
            ),
            'vertical' => array(
                'style' => PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN
            )
        )
    )
);
header('Content-Type: application/vnd.openxmlformats-officedocumnets.spreadsheetml.sheet');
header('Content-Disposition: attachment; filename="LIST OF REGISTERED ESTABLISHMENTS - PFO.xlsx"');
header('Content-Control: max-age=0');
$file = PhpOffice\PhpSpreadsheet\IOFactory::createWriter($export, 'Xlsx');
$file->save('php://output');
