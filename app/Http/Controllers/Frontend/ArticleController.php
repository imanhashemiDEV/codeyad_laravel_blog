<?php

namespace App\Http\Controllers\Frontend;

use App\Enums\CommentStatus;
use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use App\Models\Comment;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function articles($category_slug)
    {
        $category = Category::query()->where('slug', $category_slug)->firstOrFail();
        $articles = Article::query()->where('category_id', $category->id)
            ->latest()
            ->paginate(6);
        return view('frontend.articles', compact('articles'));
    }

    public function article(Article $article)
    {
        $subcategories = Category::query()->where('parent_id','!=',0)->get();
        $last_articles = Article::query()->orderBy('created_at', 'desc')->take(4)->get();
        $comments = Comment::query()
            ->where('article_id',$article->id)
            ->where('status',CommentStatus::Accepted->value)
            ->get();
        return view('frontend.single_article',
            compact('article','subcategories','last_articles','comments'));
    }
}
