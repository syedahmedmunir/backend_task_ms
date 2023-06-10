<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Job extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable =[
        'user_id',    
        'title',      
        'job_type_id',
        'rate',     
        'description',     
        'tags',     
        'created_by',
        'deleted_by',
        'updated_by',
        'restored_by'       
    ];


    public function scopeMyPost($query){
        $query->where('user_id',auth()->user()->id);
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function job_type(){
        return $this->belongsTo(JobType::class,'job_type_id');
    }
}
