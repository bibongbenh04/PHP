<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bed extends Model
{
    use HasFactory;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'department_id','code','status','notes'
    ];

    public function department(){
        return $this->belongsTo(Department::class);
    }

    public function bedallotments(){
        return $this->hasMany(BedAllotment::class);
    }
}
