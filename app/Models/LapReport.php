<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class LapReport extends Model
{
    use HasFactory;

    protected $fillable = [
        'date','time','patient_id','doctor_id','template_id','report'
    ];

    public function lapTemplete(){
        return $this->hasOne(LapTemplate::class);
    }

    public function patient(){
        return $this->belongsTo(User::class);
    }

    public function doctor(){
        return $this->belongsTo(User::class);
    }

    public function template(){
        return $this->belongsTo(LapTemplate::class);
    }

}
