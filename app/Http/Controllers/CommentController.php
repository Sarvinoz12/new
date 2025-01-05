<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Product;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        $comments = Comment::with('product')->latest()->get(); // Eager load product
        return view('comments.index', compact('comments'));
    }

    public function store(Request $request,$id)
    {

        $product = Product::findOrFail($id);
        Comment::create([
            'username'=>$request->username,
            'comment' =>$request->comment,
            'product_id' => $product->id,
//            'status' => 0,
        ]);
        // dd('sa');
        return redirect()->back()->with('success', 'Comment status updated successfully.');

    }

    public function destroy(Comment $comment)
    {
        $comment->delete();
        return redirect()->back()->with('success', 'Comment deleted successfully.');
    }

    public function comment(Request $request,$id)
    {
        // dd($request,$id);
        // $p = Product::findOrFail($id);
        Comment::create([
            'username'=>'admin',
            'comment'=>$request->answer,
            'product_id' =>$request->comment_id,
            'status'=>1
        ]);

        return redirect()->back()->with('success', 'Comment added successfully.');

    }

}
