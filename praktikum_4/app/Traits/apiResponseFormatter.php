<?php

namespace app\Traits;

trait apiResponseFormatter{
    public function apiResponse($code = 200 , $message = "success", $data = []){
    


    return json_encode([
        "code" => $code,
        "message"=> $message,
        "data" => $data

    ]);

}
}