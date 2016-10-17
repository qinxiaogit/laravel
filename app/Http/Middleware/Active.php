<?php
namespace App\Http\Middleware;
use Closure;

/**
 * Created by PhpStorm.
 * User: xiao
 * Date: 2016/10/17
 * Time: 22:13
 */
class Active{
    //前置操作
//    public function handle($request, Closure $next){
//        if(time()<strtotime('2016/10/16')){
//            return redirect('active0');
//        }else if(time()>=strtotime('2016/10/17')){
//            dd($request);
//        }else{
//           return $next($request);
//        }
//    }
    public function handle($request, Closure $next){

        echo $next($request);

    }
}