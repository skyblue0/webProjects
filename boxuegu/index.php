<?php
/**
 * Created by PhpStorm.
 * User: MyLove
 * Date: 2017/8/19 0019
 * Time: 18:28
 */
header("content-type:text/html;charset=utf-8");
/*echo "<pre>";
print_r();*/
if (array_key_exists("PATH_INFO", $_SERVER)) {
    $pathinfo = $_SERVER['PATH_INFO'];
    $pathinfo = substr($pathinfo, 1);
    $arr = explode("/",$pathinfo);
    if(count($arr)==2){
       $arr[1] = explode(".",$arr[1]);
        include 'views/'.$arr[0].'/'.$arr[1][0].'.html';
    }
    if(count($arr)==1){
        $arr[0] = explode(".",$arr[0]);
        print_r($arr[0]);
        include 'views/index/'.$arr[0][0].'.html';
    }
}else{
    include 'views/index/index.html';
}
