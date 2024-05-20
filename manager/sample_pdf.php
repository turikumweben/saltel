<?php
include "../fpdf.php";
$report= new FPDF();
$report->addpage("");
$report->setFont("Arial","B",15);
$report->cell(40,10,"welcome Pdf",1,0,"c");
$report->output("I","sample_pdf.php");
?>
