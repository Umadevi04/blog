<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','author_id','description','status',
    ];

    public function blogcategory()
    {
        return $this->belongsTo(BlogCategory::class);
    }

    public function blogtags()
    {
        return $this->belongsToMany(BlogTag::class);
    }

    public function author()
    {
        return $this->hasOne(Author::class);
    }
}
