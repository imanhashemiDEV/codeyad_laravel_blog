<?php

namespace App\Http\Controllers\Admin;

use App\Enums\CommentStatus;
use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function comments()
    {
        $comments = Comment::query()->
        orderByRaw('FIELD(status,
        "'.CommentStatus::Draft->value .'",
        "'.CommentStatus::Accepted->value .'",
        "'.CommentStatus::Rejected->value .'" )'
        )->paginate(10);
        return view('admin.comments.index', compact('comments'));
    }
}
