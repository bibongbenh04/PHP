<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class MedicineCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','description'
    ];

    public function medicines(){
        return $this->hasMany(Medicine::class);
    }
}
