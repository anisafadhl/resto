<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'product_id',
        'name',
        'price',
        'quantity',
        'image',
        'product_order',
        
        // Tambahkan kolom baru ini:
        'invoice_no',
        'payment_method',
        'payment_status',
        'address',
        'phone',
    ];
}