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

class SystemUser extends Model {

    public function checkLogin($username, $password)
    {
        // 用户信息验证
        $user = $this->where('username', $username)->find();
        if(empty($user)){
            return Helper::returnBoolWithMsg(false,'登录账号不存在，请重新输入!');
        }
        if($user['password'] !== md5($password)){
            return Helper::returnBoolWithMsg(false,'登录密码与账号不匹配，请重新输入!');
        }
        if(empty($user['status'])){
            return Helper::returnBoolWithMsg(false,'账号已经被禁用，请联系管理!');
        }
        // 更新登录信息
        $data = ['login_at' => ['exp', 'now()'], 'login_num' => ['exp', 'login_num+1']];
        $this->where(['id' => $user['id']])->update($data);

//        LogService::write('系统管理', '用户登录系统成功');
        return Helper::returnBoolWithMsg(true,'登录成功，正在进入系统...',$user);
    }

    public function editUser($postData) {
         $data=[];
         $data['phone']=$postData['phone'];
         $data['mail']=$postData['mail'];
         $data['desc']=$postData['desc'];
         $res = $this->where("id",$postData['id'])->update($data);
         if(false !== $res){
            return true;
         }else{
             return false;
         }
    }

}