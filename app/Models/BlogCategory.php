<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    use HasFactory;
    protected $fillable = [
      'id','name','status',
    ];
    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }

    public function blogtags()
    {
        return $this->hasMany(BlogTag::class);
    }
}
