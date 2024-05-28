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

    public function edit(Request $request) {
        $news = NewsAndEvent::find($request->id);
        return view('news.edit')->with(['news' => $news]);
    }

    public function update(Request $request) {
        $news = NewsAndEvent::find($request->id);

        $news->title = $request->title;
        $news->description = $request->description;

        $news->save();

        return redirect()->back()->with('success', 'News updated');
    }

    public function delete(Request $request) {
        $news = NewsAndEvent::find($request->id);
        $news->delete();
        return redirect()->back()->with('success', 'News deleted!');
    }

    public function create(Request $request) {
        $news = new NewsAndEvent();

        $news->title = $request->title;
        $news->description = $request->description;

        $news->save();

        return redirect()->back()->with('success', 'News created');
    }
}