<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Comment;
use App\Product;

class CommentController extends Controller
{
    public function store(Request $request)
    {
      $comment = new Comment;
      $comment->id = $request->get('comment_id');
      $comment->content = $request->get('commentValue');
      $comment->user()->associate($request->user());
      $product = Product::find($request->get('product_id'));
      $product->comments()->save($comment);

      return response()->json(['success'=>$product]);
    }
    public function delete(Request $request)
    {
      $comment = Comment::find($request->get('comment_id'));
      if ($comment==null) return response()->json(['success'=>""]);
      $user_id = $request->get('user_id');
      if ($user_id != \Auth::user()->id && \Auth::user()->id !=1 ) {
        return response()->json(['success'=>"Bạn không có quyền xoá bình luận người khác!"]);
      } else {
        $comment->delete();
      }
      return response()->json(['success'=>""]);
    }
}

