<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class BookmarkController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','bookmark']);
    }
    public function index()
    {
        return view('frontend.bookmark-page');
    }
}
