<?php

$html = '
<h1>Oto mój PDF!</h1>
<h2>Litwo Ojczyno moja, ty jesteś jak zdrowie!</h2>
<h3>Król Karol, kupił królowej Karolinie, korale, koloru , kolorowego</h3>
';

include("mpdf/mpdf.php");

$mpdf=new mPDF('pl','A4','','',32,25,27,25,16,13);
$mpdf->SetDisplayMode('fullpage');
$mpdf->list_indent_first_level = 0;

// LOAD a stylesheet
$stylesheet = file_get_contents('mpdf/examples/mpdfstyletables.css');
$mpdf->WriteHTML($stylesheet,1);

$mpdf->WriteHTML($html,2);

$mpdf->Output('konspekt.pdf','I');
exit;

?>