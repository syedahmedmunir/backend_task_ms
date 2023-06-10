<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable =[
        'iso',
        'name',
        'nicename',
        'iso3',
        'numcode',
        'phonecode',
        'created_by',
        'deleted_by',
        'updated_by',
        'restored_by'       
    ];
}
