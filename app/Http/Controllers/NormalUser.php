<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Middleware\CheckRole;

class NormalUser extends Controller
{
    public function __construct()
    {
        // เรียกใช้งาน Middleware ใน Constructor ของ Controller
        $this->middleware(CheckRole::class . ':normal_user');
    }

}
