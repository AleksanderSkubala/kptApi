<?php

$html = '
<h1>mPDF</h1>
<h2>Tables</h2>
<h3>CSS Styles</h3>
';

include("../mpdf.php");

$mpdf=new mPDF('c','A4','','',32,25,27,25,16,13);

$mpdf->SetDisplayMode('fullpage');

$mpdf->list_indent_first_level = 0;	// 1 or 0 - whether to indent the first level of a list

// LOAD a stylesheet
$stylesheet = file_get_contents('mpdfstyletables.css');
$mpdf->WriteHTML($stylesheet,1);	// The parameter 1 tells that this is css/style only and no body/html/text

$mpdf->WriteHTML($html,2);

$mpdf->Output('mpdf.pdf','D');
exit;

?>