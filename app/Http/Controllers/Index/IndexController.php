<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class IndexController extends Controller
{
    public function index(){
        $user=request()->user();
     
        return view('index/index');
    }




}
