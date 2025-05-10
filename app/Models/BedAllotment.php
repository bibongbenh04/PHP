<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BedAllotment extends Model
{
    use HasFactory;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'bed_id','patient_id','start_date','start_time','end_date','end_time','status'
    ];

    public function bed(){
        return $this->belongsTo(Bed::class);
    }

    public function patient(){
        return $this->belongsTo(User::class);
    }

}
