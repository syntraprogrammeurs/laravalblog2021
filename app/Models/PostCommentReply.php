<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostCommentReply extends Model
{
    use HasFactory;
    protected $fillable = ['postcomment_id', 'user_id', 'photo_id', 'body', 'is_active'];

    public function postcomment(){
        $this->belongsTo(PostComment::class);
    }
}
