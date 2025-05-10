<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Medicine extends Model
{
    use HasFactory;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','instruction','category_id','purchase_price','sale_price','quantity','company','expire_date'
    ];

    public function prescriptions(){
        return $this->belongsToMany(Prescription::class)->withPivot('instructions');
    }

    public function medicinecategory(){
        return $this->belongsTo(MedicineCategory::class);
    }
}
