<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    /** @use HasFactory<\Database\Factories\TransactionDetailFactory> */
    use HasFactory;

    protected $table = 'transaction_details';
    protected $guarded = [];
    protected $fillable = [
        'transaction_id',
        'product_id',
        'quantity'
    ];

    public function transaction_header()
    {
        return $this->belongsTo(TransactionHeader::class, 'transaction_id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
