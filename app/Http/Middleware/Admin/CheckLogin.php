<?php

namespace App\Http\Middleware\Admin;

use Closure;

class CheckLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (empty($request->fullname)) {
            return redirect('/admin/login')->withError('Đăng nhập thất bại. Bạn chưa nhập tên chính xác');
        }
        return $next($request);
    }
}
