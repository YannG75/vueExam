<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

$res = new \stdClass();

if  (empty($_POST['email']) || empty($_POST['password'])){
    http_response_code(400);
    $res->type = false;
    $res->message = 'Please fill all champs';

}

else {
    http_response_code(200);
    $res->type = true;
    $res->message = 'connexion success';
}


echo json_encode($res);
