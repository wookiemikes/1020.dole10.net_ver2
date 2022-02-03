<?php
// Require composer autoload
require_once'../mpdf/vendor/autoload.php';
// Create an instance of the class:
$mpdf = new \Mpdf\Mpdf();

// Write some HTML code:

$stylesheet = file_get_contents('../assets/css/pdfstyle.css');
$docz= file_get_contents("pdf-file.php");


$mpdf->WriteHTML($stylesheet, \Mpdf\HTMLParserMode::HEADER_CSS);
$mpdf->WriteHTML($docz, \Mpdf\HTMLParserMode::HTML_BODY);
// Output a PDF file directly to the browser
$mpdf->Output();
