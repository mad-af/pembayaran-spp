<?php

namespace App\Schema;

use Illuminate\Support\Facades\Hash;

class UserSchema {
    public static function schemaInsert($payload) {
        return [
            'username' => $payload->username,
            'password' => Hash::make($payload->password),
            'role' => $payload->role
        ];
    }

    public static function schemaUpdate($payload) {
        $data = array_shift($payload);
        return (object) [
            'userId' => array_shift($payload),
            'data' => [
                'name' => $data->name
            ]
        ];
    }
}