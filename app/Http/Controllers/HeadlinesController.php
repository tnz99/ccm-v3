<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

use App\Models\Headline;

class HeadlinesController extends Controller
{
    public function index(Request $request): View {
        $headlines = Headline::orderBy('id', 'asc')->get();

        return view('headlines.index')->with([ "headlines" => $headlines ]);
    }

    public function search(Request $request): View {
        $query = $request->search_string;
        $headlines = Headline::where('title', 'LIKE', "%$query%")->get();

        return view('headlines.index')->with([ "headlines" => $headlines ]);
    }

    public function edit(String $id): View {
        $headline = Headline::find($id);

        return view('headlines.edit')->with(['headline' => $headline]);
    }

    public function update(Request $request): RedirectResponse {
        $headline = Headline::find($request->id);

        $headline->title = $request->title;
        // $headline->position = $request->position;

        $headline->save();

        return redirect()->route('headlines.index');
    }

    // public function create(Request $request): RedirectResponse {
    //     Headline::insert([
    //         'title' => $request->title,
    //         'position' => $request->position
    //     ]);

    //     return redirect()->route('headlines.index');
    // }
}
