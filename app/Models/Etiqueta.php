<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etiqueta extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'color',
        'slug'
    ];

    public function posts(){
        return $this->belongsToMany(Post::class);
    }
}
