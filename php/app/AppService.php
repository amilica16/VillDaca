<?php
/**
 * Created by PhpStorm.
 * User: lazap
 * Date: 8/8/2017
 * Time: 7:56 PM
 */

//include all files from specified directory inside src directory
function includeAllFiles($directory){
    foreach (glob("../src/" . $directory . "/*.php") as $filename) {
        include $filename;
    }
}

includeAllFiles("db");
includeAllFiles("factory");
includeAllFiles("model");
includeAllFiles("repository");
includeAllFiles("service");
includeAllFiles("util");


if(isset($_POST)){
    $requestBody = json_decode($_POST["requestBody"]);
    $userId = $requestBody["userId"];
    $token = $requestBody["token"];
    $serviceName = $requestBody["serviceName"];

    $sessionService = ServiceFactory::getRepository("session");
    if($sessionService->validateSession($token)){
        
    } else {
        // token is not valid...
        // unauthorized
        http_response_code(401);
    }
} else {
    // request is not POST so... bad request
    http_response_code(400);
}