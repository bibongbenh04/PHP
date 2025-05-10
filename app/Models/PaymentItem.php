<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class PaymentItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'code','name','price','type','commission','quantity'
    ];

    public function payments(){
        return $this->belongsToMany(Payment::class)->withPivot('payment_item_quantity');
    }
}
