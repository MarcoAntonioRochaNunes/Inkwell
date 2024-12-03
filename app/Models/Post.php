<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = "posts";
    protected $fillable = [
        'user_id',
        'title',
        'book_img',
        'content',
        'in_group',
        'sinopse',
        'thinking'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function postTypes()
    {
        return $this->belongsToMany(PostType::class, 'posts_and_types', 'post_id', 'post_type_id');
        // Define a relação de muitos-para-muitos
    }
}
