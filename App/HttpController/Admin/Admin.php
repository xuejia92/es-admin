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
            $this->ajax(0,"非法请求",'','/admin/admin/user');
        }else{
            $sysUser = new SystemUser();
            $postData = $this->request()->getParsedBody();
            if($postData){
                if($sysUser->editUser($postData)){
                    $this->ajax(1,"请求数据为空",'','/admin/admin/user');
                }else{
                    $this->ajax(0,"更新数据失败 ",'','/admin/admin/user');
                } 
            }else{
                $this->ajax(0,"请求数据为空",'','/admin/admin/user');
            }
            
            $this->ajax(1,"信息更新成功",'','/admin/system/config');
        } 
    }


}
