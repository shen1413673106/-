<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;  //session门面使用，有命名空间，需use引入
use Illuminate\Support\Facades\Auth;   //引入 登录认证 门面
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
        // session('name',null);  //清空session   测试用
        // $name=Session::has('name');  //has 门面检测session值是否存在
        $name=Auth::check();//用auth门面登录认证
         dump($name);
        if($name==false){
            dd(11);
            return redirect('reg/login');//我的框架，用auth门面的话，前面加index.php
        }
        // echo $name;exit;
        return $next($request);
    }
}
