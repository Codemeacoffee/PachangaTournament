<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'product',
        'payerName',
        'payerSurname',
        'price',
        'roomId',
        'paypalId'
    ];
}
