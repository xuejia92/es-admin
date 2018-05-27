<?php

namespace App\HttpController\Admin;

use App\HttpController\BasicAdmin;
use think\Db;

/**
 * Class Index
 * @package App\HttpController
 */
class Index extends BasicAdmin {
    function index() {
        $_version = Db::query('select version() as ver');
        $this->fetch('admin/index/index',[
            'title'     => '后台首页',
            'mysql_ver' => array_pop($_version)['ver'],
        ]);
    }
}
