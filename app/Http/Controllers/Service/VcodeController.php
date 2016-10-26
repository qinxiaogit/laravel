<?php
/**
 * Created by PhpStorm.
 * User: xiao
 * Date: 2016/10/25
 * Time: 21:37
 */
namespace App\Http\Controllers\Service;
use App\Tools;
use App\Http\Controllers\Controller;

class VcodeController extends Controller {

    public function getVcode(){
        return (new Tools\Vcode())->outimg();
    }
}