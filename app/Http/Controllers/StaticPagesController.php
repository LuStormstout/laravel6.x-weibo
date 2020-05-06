<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class StaticPagesController extends Controller
{
    /**
     * 首页
     * @return Application|Factory|View
     */
    public function home()
    {
        $feed_items = [];
        if (Auth::check()) {
            $feed_items = Auth::user()->feed()->paginate(30);
        }

        return view('static_pages/home', compact('feed_items'));
    }

    /**
     * 帮助
     * @return Factory|View
     */
    public function help()
    {
        return view('static_pages/help');
    }

    /**
     * 关于
     * @return Factory|View
     */
    public function about()
    {
        return view('static_pages/about');
    }
}
