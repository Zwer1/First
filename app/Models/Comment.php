<?php

namespace App\Models;

use App\Models\User;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable=[

        'content','title','user_id'
    ];
    public function post(){return $this->belongsTo('App\Models\Post');}
    public function userName(){
        return User::find($this->user_id)->name;
    }
}
