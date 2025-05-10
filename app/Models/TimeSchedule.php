<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class TimeSchedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'week_day','week_num','start_time','end_time','duration','user_id',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

}
