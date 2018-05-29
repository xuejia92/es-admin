<?php
/**
 * Created by PhpStorm.
 * User: dusy
 * Date: 2018/5/19
 * Time: 13:02
 */
namespace App\Model;

use App\Utility\Helper;
use think\Model;

class SystemConfig extends Model {

    public function sysconfSave($name, $value)
    {
        $data = ['value' => $value];
        $this->where(['name' => $name])->update($data);
        return Helper::returnBoolWithMsg(true,'更新成功');
    }
}