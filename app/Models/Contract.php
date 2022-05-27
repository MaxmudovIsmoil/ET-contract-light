<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    use HasFactory;

//    protected $table = 'contract';

    public $timestamps = false;


    protected $fillable = [
        'user_id',
        'title',
        'number',
        'data',
        'status',
        'jurist_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];


    public function user() {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function jurist()
    {
        return $this->hasOne(User::class, 'id', 'jurist_id', 'left');
    }



}
