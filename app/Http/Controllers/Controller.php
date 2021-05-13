<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function responseSuccess($data, $total_data, $status, $message){

        return[
            "success" => true, //boolean
            "status" => $status, //int
            "message" => $message, //string
            "isLast" => true, //boolean //defaultnya true
            "data" => $data, //tipedata = modelnya
            "total" => $total_data //int
        ];
    }

    public function responseFailed($status, $message){

        return[
            "success" => false, //boolean
            "status" => $status, //int
            "message" => $message, //string
            "isLast" => true, //boolean //defaultnya true
        ];
    }
}
