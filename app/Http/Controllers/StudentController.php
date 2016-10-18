<?php
/**
 * Created by PhpStorm.
 * User: xiao
 * Date: 2016/10/18
 * Time: 19:18
 */

namespace App\Http\Controllers;


class StudentController extends  Controller
{
    public function index(){
        return view('student.index');
    }
}