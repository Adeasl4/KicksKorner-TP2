<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;


class Checkout extends Model
{
    use HasFactory;
    protected $table = 'checkouts';
    protected $fillable = [
        'product_id',
        'quantity',
        'total_price',
        'status',
    ];

    // Define relationships
    public function product()
    {
        return $this->belongsTo(Product::class);
    }


}
