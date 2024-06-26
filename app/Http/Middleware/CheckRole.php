<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $role)
    {
        //ส่งผู้ใช้ไปตรวจสอบว่ามีในระบบหรือไม่ถ้าไม่จะส่งกลับไป 403
        if (!$request->user() || $request->user()->status !== $role) {
            abort(403, 'Unauthorized action.');
        }

        return $next($request);
    }
}
