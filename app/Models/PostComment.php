<?php

namespace App\Models;

use App\Http\Controllers\PostComments;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PostComment extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['post_id','photo_id', 'user_id', 'category_id', 'title', 'body','is_active'];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function photo(){
        return $this->belongsTo(Photo::class);
    }
    public function post(){
        return $this->belongsTo(Post::class);
    }
    public function postcommentreplies(){
        return $this->hasMany(PostCommentReply::class,'postcomment_id');
    }

}
