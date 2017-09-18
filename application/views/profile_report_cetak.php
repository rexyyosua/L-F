<?php
//============================================================+
// File name   : example_001.php
// Begin       : 2008-03-04
// Last Update : 2013-05-14
//
// Description : Example 001 for TCPDF class
//               Default Header and Footer
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: Default Header and Footer
 * @author Nicola Asuni
 * @since 2008-03-04
 */

// Include the main TCPDF library (search for installation path).

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Rexy yosua S');
$pdf->SetTitle('Lost n Found');
$pdf->SetSubject('L&F');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data

$pdf->setFooterData(array(0,64,0), array(0,64,128));

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set default font subsetting mode
$pdf->setFontSubsetting(true);

// Set font
// dejavusans is a UTF-8 Unicode font, if you only need to
// print standard ASCII chars, you can use core fonts like
// helvetica or times to reduce file size.
$pdf->SetFont('dejavusans', '', 14, '', true);

// Add a page
// This method has several options, check the source code documentation for more information.
$pdf->AddPage();

// set text shadow effect
$pdf->setTextShadow(array('enabled'=>true, 'depth_w'=>0.2, 'depth_h'=>0.2, 'color'=>array(196,196,196), 'opacity'=>1, 'blend_mode'=>'Normal'));

// Set some content to print
$html = <<<EOD
<h2>LAPORAN</h2>
EOD;



// Print text using writeHTMLCell()
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, 'C', true);
$pdf->Ln(8);
$table = '<table style = "border:1px solid black">';
foreach($rpt as $a){
    $table .='<div class="row">
                    <div class="col s6">
                    <h3>ID Claim :'.$a->id.'</h3>
                        <ul>
                            <p><small>Pihak Penemu : '.$a->nama_user.'</small></p>
                            <li><p><small>subkategori : '.$a->kategori.'</small></p></li>
                            <li><p><small>Merek/Brand: '.$a->merek.'</small></p></li>
                            <li><p><small>Deskripsi: '.$a->deskripsi.'</small></p></li>
                            <li><p><small>Lokasi Lengkap: '.$a->lokasi_lengkap.'</small></p></li>
                            <li><p><small>Status Penerima: '.$a->status_penerima.'</small></p></li>
                            <p><small>Pihak Kehilangan: '.$a->nama_user_f.'</small></p>
                            <li><p><small>subkategori : '.$a->kategori_f.'</small></p></li>
                            <li><p><small>Merek/Brand: '.$a->merek_f.'</small></p></li>
                            <li><p><small>Deskripsi: '.$a->deskripsi_f.'</small></p></li>
                            <li><p><small>Lokasi Lengkap: '.$a->lokasi_f.'</small></p></li>
                            <li><p><small>Status Penemu: '.$a->status_penemu.'</small></p></li>
                            
                        </ul>';
}
$table .='</table>';
$pdf->writeHTMLCell(0, 0, '', '', $table, 0, 1, 0, true, 'C', true);
ob_clean();

// ---------------------------------------------------------

// Close and output PDF document
// This method has several options, check the source code documentation for more information.
$pdf->Output('example_002.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
