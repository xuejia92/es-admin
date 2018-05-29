<?php

namespace App\HttpController\Admin;

use App\HttpController\BasicAdmin;
use App\Model\SystemUser;

/**
 * Class Index
 * @package App\HttpController
 */
class Admin extends BasicAdmin {
    function user() {
        if (!$this->request()->getParsedBody()) {
            $where = [];
            $where['is_deleted'] = 0;
            $get = $this->request()->getQueryParams();
            foreach (['username', 'phone', 'mail'] as $key) {
                if(isset($get[$key]) && $get[$key] !== '') {
                    $where[$key] = ['like','%'.$get[$key].'%'];
                }
            }
            if (isset($get['date']) && $get['date'] !== '') {
                list($start, $end) = explode(' - ', $get['date']);
                $where['login_at'] = ['between',[
                    "{$start} 00:00:00","{$end} 23:59:59"
                ]];
            }
            $result = $this->_list(new SystemUser(),$where);
            $this->fetch('admin/admin/user',array_merge([
                'title'=>'系统用户管理',
                'second_menu'=>"系统用户相关",
                'third_menu'=>'用户管理',
                'classuri'=>'/admin/admin'
            ],$result));
        }else{
            $this->request()->getParsedBody();
            $this->ajax(1,"信息更新成功",'','/admin/admin/user');
        }
    }

    public function edit(){
        if (!$this->request()->getParsedBody()) {
            $this->ajax(0,"非法请求");
        }else{
            $sysUser = new SystemUser();
            $postData = $this->request()->getParsedBody();
            if($postData){
                if($sysUser->editUser($postData)){
                    $this->ajax(1,"更新成功",'','/admin/admin/user');
                }else{
                    $this->ajax(0,"更新数据失败");
                } 
            }else{
                $this->ajax(0,"请求数据为空");
            } 
        } 
    }

    public function pass(){
        if (!$this->request()->getParsedBody()) {
            $this->ajax(0,"非法请求");
        }else{
            $sysUser = new SystemUser();
            $postData = $this->request()->getParsedBody();
            if($postData){
                if($postData['password']!=$postData['repassword']){
                    $this->ajax(0,"两次密码输入不一致");
                }else{
                    if($sysUser->pass($postData)){
                        $this->ajax(1,"更新成功",'','/admin/admin/user');
                    }else{
                        $this->ajax(0,"更新密码失败");
                    } 
                }
               
            }else{
                $this->ajax(0,"请求数据为空");
            } 
        } 
    }

    public function forbid(){
        if (!$this->request()->getQueryParams()) {
            $this->ajax(0,"非法请求");
        }else{
            $sysUser = new SystemUser();
            $postData = $this->request()->getQueryParams();
            if($postData){
                if($sysUser->forbid($postData)){
                    $this->ajax(1,"操作成功",'','/admin/admin/user');
                }else{
                    $this->ajax(0,"操作失败");
                } 
               
            }else{
                $this->ajax(0,"操作失败");
            } 
        } 
    }


    public function delete(){
        if (!$this->request()->getQueryParams()) {
            $this->ajax(0,"非法请求");
        }else{
            $sysUser = new SystemUser();
            $postData = $this->request()->getQueryParams();
            if($postData){
                $this->session()->sessionStart();
                $user = $this->session()->get(SysConst::COOKIE_USER_SESSION_NAME);
                if($user['id']==$postData['id']){
                    $this->ajax(0,"不能删除自己，操作失败");
                }else{
                    if($sysUser->del($postData)){
                        $this->ajax(1,"操作成功",'','/admin/admin/user');
                    }else{
                        $this->ajax(0,"操作失败");
                    } 
                } 
               
            }else{
                $this->ajax(0,"操作失败");
            } 
        } 
    }

}
