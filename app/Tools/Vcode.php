<?php
/**
 * Created by PhpStorm.
 * User: xiao
 * Date: 2016/10/25
 * Time: 21:33
 */
namespace App\Tools;

class Vcode{
//    private $charset = 'abcdefghkmnprstuvwxyzABCDEFGHKMNPRSTUVWXYZ23456789';//随机因子
//    private $code;//验证码
//    private $codelen = 4;//验证码长度
//    private $width = 130;//宽度
//    private $height = 50;//高度
//    private $img;//图形资源句柄
//    private $font;//指定的字体
//    private $fontsize = 20;//指定字体大小
//    private $fontcolor;//指定字体颜色
//    //构造方法初始化
//    public function __construct() {
//        $this->font = 'assets/font/glyphicons-halflings-regular.ttf';//注意字体路径要写对，否则显示不了图片
//    }
//    //生成随机码
//    private function createCode() {
//        $_len = strlen($this->charset)-1;
//        for ($i=0;$i<$this->codelen;$i++) {
//            $this->code .= $this->charset[mt_rand(0,$_len)];
//        }
//    }
//    //生成背景
//    private function createBg() {
//        $this->img = imagecreatetruecolor($this->width, $this->height);
//        $color = imagecolorallocate($this->img, mt_rand(157,255), mt_rand(157,255), mt_rand(157,255));
//        imagefilledrectangle($this->img,0,$this->height,$this->width,0,$color);
//    }
//    //生成文字
//    private function createFont() {
//        $_x = $this->width / $this->codelen;
//        for ($i=0;$i<$this->codelen;$i++) {
//            $this->fontcolor = imagecolorallocate($this->img,mt_rand(0,156),mt_rand(0,156),mt_rand(0,156));
//            imagettftext($this->img,$this->fontsize,mt_rand(-30,30),$_x*$i+mt_rand(1,5),$this->height / 1.4,$this->fontcolor,$this->font,$this->code[$i]);
//        }
//    }
//    //生成线条、雪花
//    private function createLine() {
//        //线条
//        for ($i=0;$i<6;$i++) {
//            $color = imagecolorallocate($this->img,mt_rand(0,156),mt_rand(0,156),mt_rand(0,156));
//            imageline($this->img,mt_rand(0,$this->width),mt_rand(0,$this->height),mt_rand(0,$this->width),mt_rand(0,$this->height),$color);
//        }
//        //雪花
//        for ($i=0;$i<100;$i++) {
//            $color = imagecolorallocate($this->img,mt_rand(200,255),mt_rand(200,255),mt_rand(200,255));
//            imagestring($this->img,mt_rand(1,5),mt_rand(0,$this->width),mt_rand(0,$this->height),'*',$color);
//        }
//    }
//    //输出
//    private function outPut() {
//        header('Content-type:image/png');
//        imagepng($this->img);
//        imagedestroy($this->img);
//    }
//    //对外生成
//    public function doimg() {
//        $this->createBg();
//        $this->createCode();
//        $this->createLine();
//        $this->createFont();
//        $this->outPut();
//    }
//    //获取验证码
//    public function getCode() {
//        return strtolower($this->code);
//    }
    private $width; //宽
    private $height; //高
    private $num;  //数量
    private $code; //验证码
    private $img;  //图像的资源

    //构造方法， 三个参数
    function __construct($width=80, $height=20, $num=4) {
        $this->width = $width;
        $this->height = $height;
        $this->num = $num;
        $this->code = $this->createcode(); //调用自己的方法
    }

    //获取字符的验证码， 用于保存在服务器中
    function getcode() {
        return $this->code;
    }

    //输出图像
    function outimg() {
        //创建背景 (颜色， 大小， 边框)
        $this->createback();

        //画字 (大小， 字体颜色)
        $this->outstring();

        //干扰元素(点， 线条)

        $this->setdisturbcolor();
        //输出图像
        $this->printimg();
    }

    //创建背景
    private function createback() {
        //创建资源
        $this->img = imagecreatetruecolor($this->width, $this->height);
        //设置随机的背景颜色
        $bgcolor = imagecolorallocate($this->img, rand(225, 255), rand(225, 255), rand(225, 255));
        //设置背景填充
        imagefill($this->img, 0, 0, $bgcolor);
        //画边框
        $bordercolor = imagecolorallocate($this->img, 0, 0, 0);

        imagerectangle($this->img, 0, 0, $this->width-1, $this->height-1, $bordercolor);
    }

    //画字
    private function outstring() {
        for($i=0; $i<$this->num; $i++) {

            $color= imagecolorallocate($this->img, rand(0, 128), rand(0, 128), rand(0, 128));

            $fontsize=rand(3,5); //字体大小

            $x = 3+($this->width/$this->num)*$i; //水平位置
            $y = rand(0, imagefontheight($fontsize)-3);

            //画出每个字符
            imagechar($this->img, $fontsize, $x, $y, $this->code{$i}, $color);
        }
    }

    //设置干扰元素
    private function setdisturbcolor() {
        //加上点数
        for($i=0; $i<100; $i++) {
            $color= imagecolorallocate($this->img, rand(0, 255), rand(0, 255), rand(0, 255));
            imagesetpixel($this->img, rand(1, $this->width-2), rand(1, $this->height-2), $color);
        }

        //加线条
        for($i=0; $i<10; $i++) {
            $color= imagecolorallocate($this->img, rand(0, 255), rand(0, 128), rand(0, 255));
            imagearc($this->img,rand(-10, $this->width+10), rand(-10, $this->height+10), rand(30, 300), rand(30, 300), 55,44, $color);
        }
    }

    //输出图像
    private function printimg() {
        if (imagetypes() & IMG_GIF) {
            header("Content-type: image/gif");
            imagegif($this->img);
        } elseif (function_exists("imagejpeg")) {
            header("Content-type: image/jpeg");
            imagegif($this->img);
        } elseif (imagetypes() & IMG_PNG) {
            header("Content-type: image/png");
            imagegif($this->img);
        } else {
            die("No image support in this PHP server");
        }

    }

    //生成验证码字符串
    private function createcode() {
        $codes = "3456789abcdefghijkmnpqrstuvwxyABCDEFGHIJKLMNPQRSTUVWXY";

        $code = "";

        for($i=0; $i < $this->num; $i++) {
            $code .=$codes{rand(0, strlen($codes)-1)};
        }

        return $code;
    }

    //用于自动销毁图像资源
    function __destruct() {
        imagedestroy($this->img);
    }
}