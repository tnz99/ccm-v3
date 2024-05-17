<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

use App\Models\Timeline;
use App\Models\Headline;
use App\Models\Story;

class TimelineController extends Controller
{
    public function index(Request $request): View {
        $timelines = Timeline::all();
        $headlines = Headline::all();

        return view('timelines.index')->with(['timelines' => $timelines, 'headlines' => $headlines]);
    }

    public function create(Request $request): RedirectResponse {
        $timeline = new Timeline();
        $timeline->year = $request->year;
        $timeline->headline_id = $request->headline_id;
        $timeline->save();

        $story = new Story();
        $story->timeline_id = $timeline->id;
        $story->title = $request->title;
        $story->description = $request->description;
        $story->headline_id = $request->headline_id;
        $story->save();

        return redirect()->route('timelines.index');
    }

    public function edit(Request $request): View {
        return view('timelines.edit');
    }

    public function update(Request $request): View {
        return view('timelines.update');
    }

    public function delete(Request $request) {
        $timeline = Timeline::find($request->id);
        $timeline->delete();

        return redirect()->back();
    }
}
