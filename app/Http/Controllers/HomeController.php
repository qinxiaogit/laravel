<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Model\MyUser;
use App\Model\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response

    public function index()
    {
        $arry = ['name'=>'xiaoming','sex'=>0];
        $name = "xiao";
        $user = new MyUser();
//        $user->name = 'xiao';
//        $user->phone = '18227755589';
//        $user->email = '346243025@qq.com';
//        $user->password = '123456';

        $user->insert(['phone'=>'18227755589',
                        'name'=>'qinxiao',
                        'email'=>'346243025@qq.com',
        ]);
        //$user->save();

        $res = $user->all();
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
       // $student = new Student();
        //$student->name = 'qinxiao';
        //$student->age = 20;

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
        //$res = $student->where('age','=','18')->delete();
        //dd($res);
        //die();
        return view('welcome',['arry'=>$arry,'name'=>$name]);
    }
    public function testUrl(Request $request){
        //取值

        if($request->has('name')){
            echo $request->input('name');
        } else{
            echo 'ooo';
        }       //dd($request);
        //判断请求类型
        echo $request->method();

        if($request->isMethod('get')){
            echo 'YES';
        }else{
            echo 'no';
        }
        if($request->ajax()){
            echo 'yes';
        }
        echo $request->url();
    }
    public function sesion(Request $request){
        //HTTP
//        $request->session()->put('xiao','123456789');
//        dd($request->session()->all());
        //SESSION
//        session()->put('xiao','萌萌哒');
//        echo session()->get('xiao');
        //Session
       // Session::put('wo','我是你大爷');
       // echo Session::get('wo');
       // $request->session()->put('hh',['test'=>'name','nanme'=>'覃枭']);
        Session::push('student','student');
        Session::push('student','student1');
        Session::push('student','student2');
    }
    public function sesiona(Request $request){
        //echo Session::get('wo2','xxoo');
        //dd( Session::get('student'));
       //dd(Session::pull('student'));
       // Session::flush();
        if(Session::has('student')){
            //dd(Session::pull('student'));
            //Session::forget('student');
        }else{
           // dd(Session::all());
        }
        //return redirect()->back();
       dd(Session::get('message','xxoo'));
    }
    public function response(){
        $data = [
            'data'=>'xiaoming',
            'id'=>12,
            'age'=>18,
        ];
        //return response()->json($data);
        //return redirect('sesiona');
       // return redirect('sesiona')->with('message','我是快闪数据');
      //  return redirect()->action('HomeController@sesion')->with('message','我是快闪数据');
        return redirect()->route('xm')->with('message','我是快闪数据');
    }
    //中间键
    public function active0(){
        return '活动就要开始了';
    }
    public function active1(){
        return '活动已经开始';
    }
    public function active2(){
        return '活动结束了';
    }
     */
    public function index(){

        return view('home');
    }
}
