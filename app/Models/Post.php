<?php

namespace App\Models;

use App\Http\Controllers\PostComments;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'photo_id','user_id','category_id','title','slug', 'body'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function photo(){
        return $this->belongsTo(Photo::class);
    }
    public function postcomments(){
        return $this->hasMany(PostComment::class);
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
