<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostType extends Model
{
    use HasFactory;
    protected $table = "posts_type";
    protected $fillable = ['name'];

    public function posts()
    {
        return $this->belongsToMany(Post::class, 'posts_and_types', 'post_type_id', 'post_id');
        // Define a relação de muitos-para-muitos
    }
}
