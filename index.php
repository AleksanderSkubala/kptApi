<?php

$html = '
//niepotrzebne
';

include("mpdf/mpdf.php");

$mpdf=new mPDF('pl','A4');

$html = file_get_contents('template.html');
$stylesheet = file_get_contents('style.css');

$mpdf->WriteHTML($stylesheet,1);
$mpdf->WriteHTML($html,2);

$mpdf->Output('konspekt.pdf','I');
exit;

?>