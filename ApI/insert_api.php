<?php
 header ("Access-Control-Allow-Methods : POST");
 include("../config/config.php");
 $config = new Config();

 if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $NAME = $_POST['NAME'];
    $COURCE = $_POST['COURCE'];
    $DATE_OF_BIRTH = $_POST['DATE_OF_BIRTH'];
    $res = $config->insert($NAME,$COURCE,$DATE_OF_BIRTH);

    if($res){
        $arr['data'] = "Record Inserted Successfully..";

    }else{
        $arr['data'] = "Record Insertion Failed....";
    }
 }else{
    $arr['error'] = "only POST HTTP Methods are allowed..";
 }
 echo json_encode($arr);












?>