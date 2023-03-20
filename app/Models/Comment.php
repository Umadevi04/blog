<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'commentTitle' ,'blog_id', 'blog_category_id',
    ];
    public function blogs()
    {
        return $this->belongsToMany(Blog::class);
    }
}
