<?php

namespace App\Http\Controllers\User;

use App\Hw;
use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;
class HwController extends Controller
{
    /** 
     * 品牌添加
     */

    public function create(){

        return  view('hw/create');

    }
    public function store(Request $request)
    {

    }



   public function save(){

       $data=request()->except('_token');
       //单文件上传
       if(request()->hasFile('simg')){
           $data['simg']=$this->uplode('simg');
       }

       //多文件上传  待开发
    $data['add_time']=time();
//       dd($data);
       $res=Hw::insert($data);
//dd($res);
       if($res){
           return redirect('hw/index');
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
       $arr=Hw::paginate(2);//查询所有
       //DB::table('brand')->frist();//查询一条
       //DB::table('brand')->select('brand_name')->get();//查询一个字段
//       dd($arr);
           return view('hw/index',['arr'=>$arr]);
      
   }
   /** 
    *  品牌删除
    */
    public function delete($id){
        $res=Hw::where('sid',$id)->delete();
        if($res){
            return redirect('hw/index');
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
