<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'content', 'user_id']; // Symfony: Doctrine's $fillable equivalent

    public function user() {
        return $this->belongsTo(User::class); // ManyToOne
    }

    public function comments() {
        return $this->hasMany(Comment::class); // OneToMany
    }
}
