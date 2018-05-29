<?php

use App\Model\SystemConfig;
use think\Db;

function sysconf($name, $value = null)
{
    if ($value !== null) {
        $SystemConfigModel = new SystemConfig();
        return $SystemConfigModel->sysconfSave($name,$value);
    }
    $config = Db::name('SystemConfig')->column('name,value');
    return isset($config[$name]) ? $config[$name] : '';
}

function format_datetime($datetime, $format = 'Y年m月d日 H:i:s')
{
    return date($format, strtotime($datetime));
}

function auth($node)
{
    return true;
    return NodeService::checkAuthNode($node);
}

function url($node){
    return $node;
}
