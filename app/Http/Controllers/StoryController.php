<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;

use App\Models\Story;
use App\Models\Headline;

class StoryController extends Controller
{
    public function index(Request $request): View {
        $stories = Story::all();
        $headlines = Headline::all();

        return view('stories.index')->with(['stories' => $stories, 'headlines' => $headlines ]);
    }

    public function create(Request $request): RedirectResponse {
        $story = new Story();

        $story->title = $request->title;
        $story->description =$request->description;
        $story->position = $request->position;
        $story->headline_id = $request->headline_id;

        if($request->gallery_id) { $story->gallery_id = $request->gallery_id; }

        if($request->hasFile('image')) {
           $file_path = $request->file('image')->store('public');
           $story->file_path =  $file_path;
        }

        $story->save();

        return redirect()->route('stories.index');
    }

    public function edit(Request $request): View {
        $story = Story::find($request->id);
        $headlines = Headline::all();

        return view('stories.edit')->with(['story' => $story, 'headlines' => $headlines]);
    }

    public function update(Request $request): RedirectResponse {
        $story = Story::find($request->id);

        $story->title = $request->title;
        $story->description =$request->description;
        $story->position = $request->position;
        $story->headline_id = $request->headline_id;
        
        $story->save();

        return redirect()->route('stories.edit', ['id' => $story->id]);
    }
}
