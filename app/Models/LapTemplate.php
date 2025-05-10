<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class LapTemplate extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','template'
    ];

    public function lapReport(){
        return $this->belongsToMany(LapReport::class);
    }
}
