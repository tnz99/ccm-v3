<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\File;
use Illuminate\View\View;

use App\Models\Gallery;
use App\Models\Story;
use App\Models\Headline;

class GalleryController extends Controller
{
    public function index(Request $request): View {
        $galleries = Gallery::all();
        $headlines = Headline::all();

        return view('galleries.index')->with(['galleries' => $galleries, 'headlines' => $headlines]);
    }

    public function search(Request $request): View {
        $query = $request->search_string;
        $galleries = Gallery::where('title', 'LIKE', "%$query%")->get();
        $headlines = Headline::all();

        return view('galleries.index')->with(['galleries' => $galleries, 'headlines' => $headlines]);
    }


    public function create(Request $request): View | RedirectResponse {
        if($request->isMethod('get')) {
            return view('galleries.create');
        } elseif($request->isMethod('post')) {
           $gallery = new Gallery();

           $gallery->title = $request->title;
           $gallery->position = 1;
           $gallery->headline_id = $request->headline_id;

           if($request->hasFile('image')) {
            if(File::exists(public_path($gallery->file_path))) {
                File::delete(public_path($gallery->file_path));
            }

                $imageName = time().'.'.$request->image->extension();
                $request->image->move(public_path('images/upload'), $imageName);
                $gallery->file_path = 'images/upload/'.$imageName;
            }

           $gallery->save();

           $gallery->cnav_background = $gallery->headline->stories->first()->cnav_background;
           $gallery->save();

           return redirect()->route('galleries.index');
        }
    }
    
    public function edit(Request $request): View {
        $galleries = Gallery::all();
        $gallery = Gallery::find($request->id);
        $stories = $gallery->stories;
        $headlines = Headline::all();

        return view('galleries.edit')->with(['gallery' => $gallery, 'galleries' => $galleries,  'stories' => $stories, 'headlines' => $headlines]);
    }

    public function show(Request $request): View {
        $galleries = Gallery::all();
        $gallery = Gallery::find($request->id);
        $stories = $gallery->stories;
        $headlines = Headline::all();

        return view('galleries.show')->with(['gallery' => $gallery, 'galleries' => $galleries,  'stories' => $stories, 'headlines' => $headlines]);
    }

    public function update(Request $request): RedirectResponse {
        $gallery = Gallery::find($request->id);

        $gallery->title = $request->title;
        $gallery->position = $request->position;
        $gallery->headline_id = $request->headline_id;

        if($request->hasFile('image')) {
            // if(File::exists(public_path($gallery->file_path))) {
            //     File::delete(public_path($gallery->file_path));
            // }

                $imageName = time().'.'.$request->image->extension();
                $request->image->move(public_path('images/upload'), $imageName);
                $gallery->file_path = 'images/upload/'.$imageName;
        }

        $gallery->save();

        return redirect()->route('galleries.edit', ['id' => $gallery->id]);
    }

    public function delete(Request $request) {
        $gallery = Gallery::find($request->id);
        $imagePath = public_path($gallery->file_path);
        if (File::exists($imagePath)) { File::delete($imagePath); }
        $gallery->delete();

        return redirect()->back();
    }
}
