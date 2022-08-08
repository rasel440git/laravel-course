<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class address extends Model
{
    protected $table='address';

    protected $fillable = [
        'user_id',
        'state',
        'city',
        'country'
    ];

    public function User(){
        return $this->belongsTo(User::class);
    }
}
