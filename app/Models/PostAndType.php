<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostAndType extends Model
{
    use HasFactory;
    protected $fillable = [
        "post_type_id",
        "post_id"
    ];

    protected $table = "posts_and_types";

    public function post()
    {
        return $this->belongsTo(Post::class, 'post_id');
    }
    public function postType()
    {
        return $this->belongsTo(PostType::class, 'post_type_id');
    }
}
