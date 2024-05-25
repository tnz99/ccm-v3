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
        if(Headline::find($request->headline_id)->timeline) {
            return redirect()->back()->with('error', 'Timeline page already exist for the headline, please edit to add timeline.');
        } else {
            $timeline = new Timeline();
            $timeline->headline_id = $request->headline_id;
            $timeline->save();
            
            return redirect()->route('timelines.edit', $timeline->id)->with('success', 'Timeline page added successfully , please add timelines.');
        }
    }

    public function edit(Request $request): View {
        $timeline = Timeline::find($request->id);
        $stories = $timeline->stories;

        $data = [
            'timeline' => $timeline,
            'stories' => $stories,
            'headlines' => Headline::all()
        ];

        return view('timelines.edit')->with($data);
    }

    public function update(Request $request): View {
        return view('timelines.update');
    }

    public function delete(Request $request) {
        $timeline = Timeline::find($request->id);
        $timeline->delete();

        return redirect()->back()->with('success', 'Timeline deleted!');
    }
}
