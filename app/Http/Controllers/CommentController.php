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
      $comment->content = $request->get('commentValue');
      $comment->user()->associate($request->user());
      $product = Product::find($request->get('product_id'));
      $product->comments()->save($comment);
      
      return response()->json(['success'=>$product]);
    }
}

