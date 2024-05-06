<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class DonationsController extends Controller
{
    public function international(Request $request): View | RedirectResponse {
        $user = auth()->user();

        if($user->isDonar()) {
            return view('donations.international');
        } else {
            return redirect('/');
        }
    }

    public function local(Request $request): View | RedirectResponse {
        $user = auth()->user();

        if($user->isDonar()) {
            return view('donations.local');
        } else {
            return redirect('/');
        }
    }

    public function history(Request $request): View |  RedirectResponse {
        $user = auth()->user();

        $records = [
            ['date' => '2024-05-01', 'amount' => 100],
            ['date' => '2024-05-02', 'amount' => 150],
            ['date' => '2024-05-03', 'amount' => 200],
        ];

        if($user->isDonar()) {
            return view('donations.history')->with(['records' => $records]);
        } else {
            return redirect('/');
        }
    }
}
