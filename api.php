<?php
    header("Access-Control-Allow-Origin:*");
    header('Content-Type: application/json; charset=utf-8');
    header("Access-Control-Allow-Credentials:true");
    header("Access-Control-Allow-Headers:Origin,Content-Type,X-Amz-Date,Authorization,X-Api-Key,X-Amz-Security-Token,locale");
    header("Access-Control-Allow-Methods: POST, HEAD");


    $obj = [
        'active_ad' => '1'
    ];

    die (json_encode($obj));

?>