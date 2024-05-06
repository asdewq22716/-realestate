<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\MyService;
use App\Http\Middleware\CheckRole;
use Symfony\Contracts\Service\Attribute\Required;

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
        return view('HomePage');
    }

    function AddTread()
    {
        return view('AddTread');
    }

    function insert(Request $request)
    {

        $request->validate([
            'nameTread' => 'required|max:100',
            'DetailTread' => 'required'
        ], [
            'nameTread.required'
        ]);
    }
}
