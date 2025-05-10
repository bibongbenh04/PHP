<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class DayoffSchedule extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'date','user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }


}
