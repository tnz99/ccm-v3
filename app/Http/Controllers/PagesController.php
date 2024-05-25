<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

use App\Models\Headline;
use App\Models\Timeline;
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
        $timeline = $headline->timeline;

        $story = $main_stories->first();

        $nav_links = [...$main_stories, ...$galleries, $timeline];        

        $data = [
            'story' => $story,
            'galleries' => $galleries,
            'main_stories' => $main_stories,
            'nav_links' =>  $nav_links
        ];

        return view('pages.story')->with($data);
    }

    // GET /stories/gallery/{id}
    public function gallery(Request $request): View {
        $gallery = Gallery::find($request->id);
        $headline = $gallery->headline;

        $gallery_items = $gallery->stories;
        $gallery_items = $gallery->stories;

        $main_stories = $headline->stories->where('gallery_id',null)->where('timeline_id', null);
        $galleries = $headline->galleries;
        $timeline = $headline->timeline;
        $nav_links = [...$main_stories, ...$galleries, $timeline];

        $data = [
            'gallery' => $gallery,
            'galleries' => $galleries,
            'nav_links' =>  $nav_links,
            'gallery_items' => $gallery_items
        ];

        return view('templates.gallery')->with($data);
    }

    public function mainStory(Request $request): View {
        $story = Story::find($request->id);

        $headline = $story->headline;
        $galleries = $headline->galleries;
        $timeline = $headline->timeline;

        $main_stories =  $headline->stories->where('gallery_id',null)->where('timeline_id', null);

        $nav_links = [...$main_stories, ...$galleries, $timeline];        

        $data = [
            'story' => $story,
            'galleries' => $galleries,
            'main_stories' => $main_stories,
            'nav_links' =>  $nav_links
        ];

        return view('pages.story')->with($data);
    }

    public function timeline(Request $request): View {
        $timeline = Timeline::find($request->id);

        $headline = $timeline->headline;
        
        $galleries = $headline->galleries;
        $timeline = $headline->timeline;
        $main_stories =  $headline->stories->where('gallery_id',null)->where('timeline_id', null);
        $nav_links = [...$main_stories, ...$galleries, $timeline];  

        $stories = $timeline->stories;
        $sortedStories = $stories->sortBy(function ($story) {
            return (int) $story->title;
        })->values();

        $story = isset($request->story_id) ? Story::find($request->story_id) : $sortedStories->first();
        $data = [
            'story' =>  $story,
            'stories' => $sortedStories,
            'timeline' => $timeline,
            'galleries' => $galleries,
            'main_stories' => $main_stories,
            'nav_links' =>  $nav_links
        ];

        return view('templates.timeline')->with($data);
    }
 }
