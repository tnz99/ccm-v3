<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

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
 }
