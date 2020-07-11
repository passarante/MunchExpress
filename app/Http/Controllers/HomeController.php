<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Services\MenuService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(MenuService $service)
    {
        $resto_id = [1];
        $categories = $service->getMenuWithCategory($resto_id);
        return view('home', compact("categories"));
    }
}
