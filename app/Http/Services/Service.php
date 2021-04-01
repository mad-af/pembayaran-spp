<?php

namespace App\Http\Services;

class Service
{
    public function responset($payload) {
        $response = (object) [
            'err' => false,
            'data' => $payload,
        ];
        return response() -> json($response);
    }

    public function responsef($payload = null) {
        $response = (object) [
            'err' => true,
            'data' => null,
        ]; 
        if (!empty($payload)) {
            $response->code = $payload;
        }
        return response() -> json($response);
    }
}
