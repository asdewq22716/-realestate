<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\MyService;
use App\Http\Middleware\CheckRole;

class HomeController extends Controller
{


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        /*  $this->middleware(CheckRole::class); */
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $MyService = new MyService;
        $MyService->ClassTest("");
        return view('HomePage');
    }
}
