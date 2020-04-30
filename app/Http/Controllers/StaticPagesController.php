<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\View\View;

class StaticPagesController extends Controller
{
    /**
     * 首页
     * @return Factory|View
     */
    public function home()
    {
        return view('static_pages/home');
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
