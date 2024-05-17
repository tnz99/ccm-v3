<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

use App\Models\Headline;
use App\Models\Gallery;
use App\Models\Story;


class PagesController extends Controller
{
    public function index(Request $request): View {
        return view('pages.index');
    }

    public function home(Request $request): View { 
        return view('pages.home');
    }

    public function about(Request $request): View {
        return view('pages.about');
    }

    public function contact(Request $request): View {
        return view('pages.contact');
    }
    
    public function newsAndEvent(Request $request): View {
        return view('pages.news-and-event');
    }

    public function dashboard(Request $request): View {
        return view('pages.dashboard');
    }

     // GET /story/{id}
    public function story(Request $request): View {
        $headline = Headline::find($request->id);
        
        $main_stories = $headline->stories->where('gallery_id',null)->where('timeline_id', null);
        $galleries = $headline->galleries;
        $timelines = $headline->timelines;

        $story = $main_stories->first();

        $nav_links = [...$main_stories, ...$galleries, ...$timelines];        

        $data = [
            'story' => $story,
            'galleries' => $galleries,
            'timelines' => $timelines,
            'main_stories' => $main_stories,
            'nav_links' =>  $nav_links
        ];

        // dd($data);
        return view('pages.story')->with($data);
    }

    // GET /stories/gallery/{id}
    public function gallery(Request $request): View {
        $gallery = Gallery::find($request->id);
        $headline = $gallery->headline;

        $gallery_items = $gallery->stories;
        $gallery_items = $gallery->stories;

        $main_stories =  $headline->stories->where('gallery_id',null)->where('timeline_id', null);
        $galleries = $headline->galleries;
        $timelines = $headline->timelines;
        $nav_links = [...$main_stories, ...$galleries, ...$timelines];

        $data = [
            'gallery' => $gallery,
            'galleries' => $galleries,
            'timelines' => $timelines,
            'nav_links' =>  $nav_links,
            'gallery_items' => $gallery_items
        ];

        return view('templates.gallery')->with($data);
    }

    public function mainStory(Request $request): View {
        $story = Story::find($request->id);

        $headline = $story->headline;
        $galleries = $headline->galleries;
        $timelines = $headline->timelines;

        $main_stories =  $headline->stories->where('gallery_id',null)->where('timeline_id', null);

        $nav_links = [...$main_stories, ...$galleries, ...$timelines];        

        $data = [
            'story' => $story,
            'galleries' => $galleries,
            'timelines' => $timelines,
            'main_stories' => $main_stories,
            'nav_links' =>  $nav_links
        ];

        return view('pages.story')->with($data);
    }

    public function timeline(Request $request): View {
        $headline = Headline::find($request->id);
        $stories = $headline->stories;
        $story = $stories->first();
        $galleries = $headline->galleries;
        $timelines = $headline->timelines;

        // $data = [
        //     'story' => $story,
        //     'headline' => $headline,
        //     'stories' => $stories,
        //     'galleries' => $galleries,
        //     'timelines' => $timelines
        // ];

        return view('templates.timeline');
    }
 }
