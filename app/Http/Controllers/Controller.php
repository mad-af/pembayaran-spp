<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use MarcinOrlowski\ResponseBuilder\ResponseBuilder;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function responset($data) {
        $response = (object) [    
            'code' => 200,
            'data' => $data,
            'massage' => 'Your Request Has Been Processed',
            'success' => true
        ];
        return response() -> json($response);
    }

    public function responsetp($data, $meta) {
        $response = (object) [    
            'code' => 200,
            'data' => $data,
            'massage' => 'Your Request Has Been Processed',
            'meta' => $meta,
            'success' => true
        ];
        return response() -> json($response);
    }

    public function responsef($message, $code) {
        $response = (object) [
            'code' => $code,
            'data' => null,
            'massage' => $message,
            'success' => false
        ]; 
        return response() -> json($response, $code);
    }
}
