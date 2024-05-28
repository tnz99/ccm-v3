<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\NewsAndEvent;

class NewsController extends Controller
{
    public function index(Request $request) {
        $user = auth()->user();
 
        if(isset($request->id) && $request->id != null) {
            $first_news = NewsAndEvent::find($request->id);
        } else {
            $first_news = NewsAndEvent::first();
        }

        $news = NewsAndEvent::all();

        if(isset($user) && !$user->isDonar()) {
            return view('news.index')->with('news', $news);
        } else {
            return view('pages.news-and-event')->with(['first_news' => $first_news, 'news' => $news]);
        }
    }
}
