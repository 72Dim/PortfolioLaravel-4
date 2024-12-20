<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $dateFormat = 'Y-m-d H:i:s.u';
    protected $fillable = [
        'userId',
        'nOrder',
        'orderSum',
        'amountInCart',
        'inCart',
    ];
    protected $guarded = [
        'id', 'created_at', 'updated_at',
    ];
}
