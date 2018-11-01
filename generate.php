<?php

    include("mpdf/mpdf.php");
    $mpdf=new mPDF('pl','A4');

    $html = file_get_contents('template.html');
    $mpdf->WriteHTML($html,);

    $mpdf->Output('konspekt.pdf','I');
    exit;

?>