<?php

namespace App\Http\Controllers;

use App\Models\PostComment;
use Illuminate\Http\Request;

class BestCommentController extends Controller
{
    //

    public function store(PostComment $postcomment){
//        dd($postcomment);
        $this->authorize('update', $postcomment->post);
        //$postcomment->post->best_comment_id = $postcomment->id;
        $postcomment->post->setBestComment($postcomment);
        $postcomment->post->save();
        return back();
    }
}
