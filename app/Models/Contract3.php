<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract3 extends Model
{
    use HasFactory;

    protected $table = 'templates';

    public $timestamps = false;


    protected $fillable = [
        'user_id',
        'data',
        'status',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

}
