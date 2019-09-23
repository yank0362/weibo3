<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class StaticPagesController extends Controller
{
    public function home()
    {
    	$feed_items = [];
        if (Auth::check()) {
            $feed_items = Auth::user()->feed()->paginate(30);
        }
    	# code...
    	return view('static_pages.home',compact('feed_items'));
    }

    public function about()
    {
    	# code...
    	return view('static_pages.about');
    }

    public function help()
    {
    	# code...
    	return view('static_pages.help');
    }
}
