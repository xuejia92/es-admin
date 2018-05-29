<?php

namespace App\HttpController\Admin;

use App\HttpController\BasicAdmin;

/**
 * Class Index
 * @package App\HttpController
 */
class System extends BasicAdmin {
    function config() {
        if (!$this->request()->getParsedBody()) {
            $this->fetch('admin/system/config',[
                'title'=>'系统管理',
                'second_menu'=>"系统管理",
                'third_menu'=>'系统参数'
            ]);
        }else{
            foreach ($this->request()->getParsedBody() as $key => $vo) {
                sysconf($key, $vo);
            }
            $this->ajax(1,"信息更新成功",'','/admin/system/config');
        }
    }

}
