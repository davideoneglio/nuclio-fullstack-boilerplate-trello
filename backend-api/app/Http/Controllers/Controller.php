<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}

/* protected function errorResponse ($message, $errorCode){
        $error = {
            "message" => $message,
            "code" =>   $errorCode,
        }
        return response(conten: '', $error->code) -> json($error)->s; /*
