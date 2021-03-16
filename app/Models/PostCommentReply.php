<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\PostCommentReply
 *
 * @property int $id
 * @property int $postcomment_id
 * @property int $is_active
 * @property int $user_id
 * @property int $photo_id
 * @property string $body
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|PostCommentReply newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PostCommentReply newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PostCommentReply query()
 * @method static \Illuminate\Database\Eloquent\Builder|PostCommentReply whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostCommentReply whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostCommentReply whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostCommentReply whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostCommentReply wherePhotoId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostCommentReply wherePostcommentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostCommentReply whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostCommentReply whereUserId($value)
 * @mixin \Eloquent
 */
class PostCommentReply extends Model
{
    use HasFactory;
    protected $fillable = ['postcomment_id', 'user_id', 'photo_id', 'body', 'is_active'];

    public function postcomment(){
        $this->belongsTo(PostComment::class);
    }
}
