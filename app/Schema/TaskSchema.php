<?php

namespace App\Schema;

use Illuminate\Support\Facades\Hash;

class TaskSchema {
    public static function schemaInsert($payload) {
        return [
            'title' => $payload->title,
            'event' => $payload->event,
            'description' => $payload->description,
            'assignee' => $payload->assignee,
        ];
    }

    public static function schemaUpdate($payload) {
        $data = array_shift($payload);
        return (object) [
            'taskId' => array_shift($payload),
            'data' => [
                'title' => $data->title,
                'event' => $data->event,
                'description' => $data->description,
                'assignee' => $data->assignee,
            ]
        ];
    }
}