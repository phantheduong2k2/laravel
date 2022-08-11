<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class positions extends Model
{
    use HasFactory;
    protected $table = 'positions';
    protected $filable = [
        'name',
        'status',
    ];

    // public function users(){
    //     return $this->hasMany(User::class, 'position_id', 'id');
    // }
}
