<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

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

        return view('galleries.index')->with([ "galleries" => $galleries ]);
    }


    public function create(Request $request): View | RedirectResponse {
        if($request->isMethod('get')) {
            return view('galleries.create');
        } elseif($request->isMethod('post')) {
           $gallery = new Gallery();

           $gallery->title = $request->title;
           $gallery->position = $request->position;
           $gallery->headline_id = $request->headline_id;

           $gallery->save();

           return redirect()->route('galleries.index');
        }
    }

    public function edit(Request $request): View {
        $gallery = Gallery::find($request->id);

        return view('galleries.edit')->with(['gallery' => $gallery]);;
    }

    public function update(Request $request): RedirectResponse {
        $gallery = Gallery::find($request->id);

        $gallery->title = $request->title;
        $gallery->save();

        $story = new Story();

        $story->gallery_id = $gallery->id;
        $story->title = $request->title;
        $story->description =$request->description;
        $story->position = $request->position;
        $story->headline_id = $request->headline_id;

        $story->save();

        return redirect()->route('galleries.edit', ['id' => $gallery->id]);
    }
}
