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
    public function search(Request $request) {
        $query = $request->search_string;
        $stories = Story::whereNull('gallery_id')->WhereNull('timeline_id')->where('title', 'LIKE', "%$query%")->get();
        $headlines = Headline::all();

        return view('stories.index')->with(['stories' => $stories, 'headlines' => $headlines ]);
    }

    public function index(Request $request): View {
        $stories = Story::whereNull('gallery_id')->WhereNull('timeline_id')->get();
        $headlines = Headline::all();

        return view('stories.index')->with(['stories' => $stories, 'headlines' => $headlines ]);
    }
    
    public function create(Request $request): RedirectResponse {
        $story = new Story();

        $story->title = $request->title;
        $story->sub_title = $request->subtitle;
        $story->description = $request->description;
        $story->position = 1;
        $story->headline_id = $request->headline_id;

        $story->title_text_color = $request->title_text_color;
        $story->description_text_color = $request->description_text_color;
        $story->sub_title_text_color = $request->sub_title_text_color;

        if($request->gallery_id) { $story->gallery_id = $request->gallery_id; }
        if($request->timeline_id) { $story->timeline_id = $request->timeline_id; }

        if($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images/upload'), $imageName);
            $story->file_path = 'images/upload/'.$imageName;
        }

        $story->save();

        $success = '';
        if($request->gallery_id) {
            $story->cnav_background = $story->headline->galleries->first()->cnav_background;
            $story->save();
            $success = 'Gallery Item Added Successfully.';
        } else {
            $story->cnav_background = $story->headline->stories->first()->cnav_background;
            $story->save();
            $success = 'Story Added Successfully.';
        }

        return redirect()->back()->with('success', $success);
    }

    public function edit(Request $request): View {
        $story = Story::find($request->id);
        $headlines = Headline::all();

        return view('stories.edit')->with(['story' => $story, 'headlines' => $headlines]);
    }

    public function update(Request $request): RedirectResponse {
        $story = Story::find($request->id);

        $story->title = $request->title;
        $story->sub_title = $request->sub_title;
        $story->description =$request->description;
        $story->position = 1;
        $story->headline_id = $request->headline_id;

        $story->title_text_color = $request->title_text_color;
        $story->description_text_color = $request->description_text_color;
        $story->sub_title_text_color = $request->sub_title_text_color;

        if($request->hasFile('image')) {
            if(File::exists(public_path($story->file_path))) {
                File::delete(public_path($story->file_path));
            }

            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images/upload'), $imageName);
            $story->file_path = 'images/upload/'.$imageName;
        }
        
        $story->save();

        return redirect()->back()->with('success', 'Updated Successfully');
    }

    public function delete(Request $request) {
        $story = Story::find($request->id);
        $imagePath = public_path($story->file_path);
        if (File::exists($imagePath)) { File::delete($imagePath); }
        $story->delete();

        return redirect()->back()->with('success', 'Deleted Successfully');
    }
}
