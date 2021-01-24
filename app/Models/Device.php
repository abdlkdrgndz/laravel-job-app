<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory;

    const STATUS_ACTIVE = 1;
    const STATUS_PASSIVE = 0;
    const STATUS_CANCEL = 2;
}
