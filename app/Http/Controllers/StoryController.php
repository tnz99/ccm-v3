<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

use App\Models\Story;
use App\Models\Headline;

class StoryController extends Controller
{
    public function index(Request $request): View {
        $stories = Story::whereNull('gallery_id')->get();
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

            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images/upload'), $imageName);
            $story->file_path = 'images/upload/'.$imageName;
        }

        $story->save();

        if($request->gallery_id) {
            $story->cnav_background = $story->headline->galleries->first()->cnav_background;
            $story->save();
        } else {
            $story->cnav_background = $story->headline->stories->first()->cnav_background;
            $story->save();
        }

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

        if($request->hasFile('image')) {
            // if(File::exists(public_path($story->file_path))) {
            //     File::delete(public_path($story->file_path));
            // }

            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images/upload'), $imageName);
            $story->file_path = 'images/upload/'.$imageName;
        }
        
        $story->save();

        return redirect()->back();
    }

    public function delete(Request $request) {
        $story = Story::find($request->id);
        $imagePath = public_path($story->file_path);
        if (File::exists($imagePath)) { File::delete($imagePath); }
        $story->delete();

        return redirect()->back();
    }
}
