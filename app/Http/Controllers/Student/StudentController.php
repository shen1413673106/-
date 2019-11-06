<?php

namespace App\Http\Controllers\Student;

use App\Cus;
use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;
class StudentController extends Controller
{
    /** 
     * 品牌添加
     */

    public function create(){

        return  view('student/create');

    }


   public function save(){
       $data=request()->except('_token');
//      dump($data);
       if(request()->hasFile('simg')){
           $data['simg']=$this->uplode('simg');
       }


//     dd($data);
    // DB添加数据
       $res=DB::table('student')->insert($data);
//       dd($res);
       if($res){
           return redirect('student/index');
       }
   }

    /**
     *  文件上传
     */
    public function uplode($file){
        if (request()->file($file)->isValid()) {
            $photo = request()->file($file);
            $extension = $photo->extension();
            $store_result = $photo->store('uplode');
            return $store_result;
        }
        exit('未获取到上传文件或上传过程出错');
    }
   /**
    *  品牌列表展示
    */
   public function index(){
       //DB中查询数据库


       $arr=DB::table('student')->paginate(2);//查询所有
       //DB::table('brand')->frist();//查询一条
       //DB::table('brand')->select('brand_name')->get();//查询一个字段
//       dd($arr);
           return view('student/index',['arr'=>$arr]);
      
   }

    public function show(){


        $show=DB::table('student')->orderByRaw("RAND()")->first();
        return view('student/show',['show'=>$show]);
    }
   /** 
    *  品牌删除
    */
    public function delete($id){
        $res=DB::table('brand')->where('brand_id',$id)->delete();
        if($res){
            return redirect('brand/show');
        }
    }

   /** 
    *  品牌修改视图
    */
   public function edit($id){
        $data=DB::table('brand')->where('brand_id',$id)->first();
        return view("brand/edit",['data'=>$data]);
   }

   /** 
    *  执行品牌修改
    */
    public function update($id){
        $data=request()->except(['_token']);
         //文件上传
        if(request()->hasFile('brand_logo')){
            $data['brand_logo']=$this->uplode('brand_logo');
        }
        
        $res=DB::table('brand')
        ->where('brand_id',$id)
        ->update($data);
        if($res){
            return redirect('brand/show');
        }
    }
}
