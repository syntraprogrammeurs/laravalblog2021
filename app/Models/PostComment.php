<?php

namespace App\Models;

use App\Http\Controllers\PostComments;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\PostComment
 *
 * @property int $id
 * @property int $post_id
 * @property int $user_id
 * @property int $is_active
 * @property int $photo_id
 * @property string $body
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Category $category
 * @property-read \App\Models\Photo $photo
 * @property-read \App\Models\Post $post
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\PostCommentReply[] $postcommentreplies
 * @property-read int|null $postcommentreplies_count
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|PostComment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PostComment newQuery()
 * @method static \Illuminate\Database\Query\Builder|PostComment onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|PostComment query()
 * @method static \Illuminate\Database\Eloquent\Builder|PostComment whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostComment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostComment whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostComment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostComment whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostComment wherePhotoId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostComment wherePostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostComment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostComment whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|PostComment withTrashed()
 * @method static \Illuminate\Database\Query\Builder|PostComment withoutTrashed()
 * @mixin \Eloquent
 */
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
    public function isBestComment(){
        return $this->id == $this->post->best_comment_id;
    }
}
