<?php
    include_once('mpdf/mpdf.php');

    ob_start();
    include_once('template.html');
    $html = ob_get_clean();
    //kartka A4 210x297 mm
    $mpdf=new mPDF('pl','A4');
    $mpdf->SetDisplayMode('fullpage');
    $mpdf->list_indent_first_level = 0;
    $mpdf->WriteHTML($html);
    $mpdf->Output();
?>