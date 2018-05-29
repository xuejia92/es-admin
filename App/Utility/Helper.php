<?php
/**
 * Created by PhpStorm.
 * User: dusy
 * Date: 2018/5/19
 * Time: 13:13
 */

namespace App\Utility;

class Helper
{
    public static function returnBoolWithMsg($boolen,$msg='',$data=[]){
        return [$boolen,$msg,$data];
    }

}