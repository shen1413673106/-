<?php

namespace App\Http\Controllers\Index;
use Illuminate\Support\Facades\Auth; //手动认证用户
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Mail;
class LoginController extends Controller
{
    public function login(){
        return view('login.index');
    }

    public function reg(){
        return view('login.reg');
    }

    public function logindo(){
        $data=request()->except('_token');
//         dd($data);
        //手动认证用户
//         dd(Auth::attempt($data));  //正确为ture 不正确为flase
//        if (Auth::attempt($data)) {
            // 认证通过...

            $where=[
              'name'=>$data['name']
            ];
            $name=User::where($where)->first();
//            dd($name);

              if(md5($data['password'])===$name['password']){
                    echo  "登陆成功111";die;
              }
              echo "登录失败2222";die;


//            $res=Auth::check($name);//用auth门面登录认证

//        }
    }
    public function sendemail(){
        $name=request()->name;
//        dd($name);
        $cold=rand(1000,9999);
        $emailInfo=['name'=>$name,'cold'=>$cold,'cate_time'=>time()];
//        dd($emailInfo);
        session(['emailInfo'=>$emailInfo]);
//       echo session('emailInfo');
        $this->send($name,$cold);

    }
    public function send($name,$cold){
        \Mail::send('email' , ['name'=>$cold] ,function($message)use($name){
            //设置主题
            $message->subject("1904 商城注册");
            //设置接收方
            $message->to($name);
        });
    }



}
