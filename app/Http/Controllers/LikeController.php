<?php

namespace App\Http\Controllers;

use App\Models\Like;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function store(Request $request, Like $like)
    {
        $user = auth()->user();
        $protain_id = $request->protain_id;
        $is_like = $like->isLike($user->id, $protain_id);

        if(!$is_like) {
            $like->storeLike($user->id, $protain_id);
            return back();
        }
        return back();
    }

    public function destroy(Like $like)
    {
        $user_id = $like->user_id;
        $protain_id = $like->protain_id;
        $like_id = $like->id;
        $is_like = $like->isLike($user_id, $protain_id);

        if($is_Like) {
            $like->destroyLike($like_id);
            return back();
        }
        return back();
    }
}
