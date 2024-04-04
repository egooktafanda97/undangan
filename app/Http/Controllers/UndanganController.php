<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class UndanganController extends Controller
{
    public function index()
    {
        $comment = Comment::orderBy("id", "desc")->paginate(20);
        return view('show-undangan', compact("comment"));
    }

    public function comment(Request $request)
    {
        try {
            Comment::create([
                "name" => $request->name,
                "message" => $request->message
            ]);
            return redirect()->back();
        } catch (\Throwable $th) {
            return redirect()->back();
        }
    }
}
