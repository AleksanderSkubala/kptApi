<?php

    $data = $_GET['data'];
    $down = strtolower($_GET['down']);
    $name = strtolower($_GET['name']);

    $downOut = 'D';
    $nameOut = '';
    $content = '';
    $status = '';

    $json = array();

    if($down){
        if($down === 'load'){
            $downOut = 'I';
        }
        else if($down === 'download'){
            $downOut = 'D';
        }
    }//checking is down empty


    if($data){
        $content = $data;
    }else{
        $status = "ERROR! There is no data!";
    }//checking is data empty


    if($name){
        $nameOut = $name;
    }
    else{
        $nameOut = 'file';
    }//checking is name empty


    ///CREATING PDF///

    include("mpdf/mpdf.php");  //including mpdf library
    $mpdf = new mPDF('pl','A4');  //creating var with page

    $html = $content; //setting content
    $mpdf->WriteHTML($html);   //merging page with content

    $mpdf->Output( $nameOut.'.pdf', $downOut);  //doing output
    exit;

    ///RETURNING JSON///

    /*$json = array(
        'status' => $status,
        'name' => $name.'.pdf'
    );

    echo json_encode($json);*/

?>