<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\User;
use Illuminate\Http\Request;

class EloquentController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //$data = Article::query()->get('title');
       // $data = Article::query()->find(1);
       // $data = Article::query()->findOrFail(1);
       // $data = Article::query()->create([]);
       // $data = Article::query()->update([]);
       // $data = Article::query()->find(5)?->delete();
       // $data = Article::destroy(5);
       // $data = Article::query()->first();
       // $data = Article::query()->firstOrFail();
       // $data = Article::query()->orderBy('created_at','DESC')->first();
       // $data = Article::query()->latest()->first();
       // $data = Article::query()->oldest()->first();
       // $data = Article::query()->limit(4)->get();
       // $data = Article::query()->take(4)->get();
       // $data = Article::query()->skip(4)->get();
       // $data = Article::query()->paginate(4);
       // $data = Article::query()->simplePaginate(4);
       // $data = Article::query()->count('image');
//        $data = Article::query()
//            ->where('id','>',6)
//            ->orWhere('tilte','foo')
//            ->get();
//        $data = Article::query()
//            ->where([
//                ['id','>',6],
//                ['tilte','foo']
//            ])->get();

        $data = Article::query()->whereNull('image')->get();
        $data = Article::query()->whereNotNull('image')->get();
        $data = Article::query()->whereTitle('foo')->get();
        $data = Article::query()->whereDate('created_at','2024/12/10')->get();
        $data = Article::query()->whereBetween('created_at',['2024/12/10','2024/12/28'])->get();
        $data = Article::query()->whereIn('id',[1,3,4,5])->first();
        $data = Article::query()->whereNotIn('id',[1,3,4,5])->exists();
          dd($data);
        return view('eloquent');
    }
}
