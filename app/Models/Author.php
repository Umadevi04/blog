<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','blog_id',
    ];
    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }

}
