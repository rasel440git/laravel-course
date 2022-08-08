<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'desc',
        'status'
    ];

    public function User(){
        return $this->belongsTo(User::class);
    }
    public function tag(){
        return $this->belongsToMany(tag::class, 'post_tag','post_id','tag_id');
    }
}
