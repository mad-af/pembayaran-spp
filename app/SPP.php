<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SPP extends Model
{
    protected $fillable = [
        'sppName',
        'price',
        'isPaidOff',
        'studentId'
    ];
}
