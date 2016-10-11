<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Student;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      //  $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arry = ['name'=>'xiaoming','sex'=>0];
        $name = "xiao";
//        $res = Student::all();
//        foreach ($res as $value){
//            var_dump($value);
//            //print_r('1');
//        }
        //$res = Student::find(1);
        //
       // $res = Student::findOrFail(6);
        //$res = Student::get();
//        $res = Student::where('id','>','1')
//            ->orderBy('id')
//            ->first();
//        $res = Student::chunk(2,function ($data){
//            dd($data);
//        });
        //聚合函数
       // $res = Student::count();
//        $res = Student::where('id','>','2')->max('id');
//        dd($res);

        //使用模型新增数据
        $student = new Student();
        $student->name = 'qinxiao';
        $student->age = 20;

//       $res =  $student->save(['name','age']);
        //$res = $student->create(['name'=>'xiaoming','age'=>18]);
        //$res = $student->firstOrCreate(['name'=>'xxoo']);
//        $res = $student->firstOrNew(['name'=>'ooxx']);
//        $res->save();

//        $res = $student->find(1);
//        $res->name = "123456";
//            $res->save();
//        $res = $student->where('age','=','0')->update(['age'=>15]);
        //通过模型删除
        //$res = $student->find(1)->delete();
       // $res = $student->destroy(2,3,4);
        //$res = $student->destroy([2,3,4,5]);
        $res = $student->where('age','=','18')->delete();
        dd($res);
        die();
        return view('welcome',['arry'=>$arry,'name'=>$name]);
    }
}
