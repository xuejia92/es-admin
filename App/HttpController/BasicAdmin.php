<?php

namespace App\HttpController;

use App\Utility\SysConst;

/**
 * 后台权限基础控制器
 * Class BasicAdmin
 * @package controller
 */
class BasicAdmin extends ViewController
{

    public $title;
    public $table;
    
   
    protected function onRequest($action): ?bool
    {
        $this->session()->sessionStart();
        $session = $this->session()->get(SysConst::COOKIE_USER_SESSION_NAME);
        var_dump($session);
        if (!$session) {
            $this->response()->redirect('/admin/login/index');
            return false;
        }
        return true;
    }

    public function index() {

    }

    public function ajax($state=1,$msg='成功',$data=[],$redirect_url="/",$time_out=2){
        $json_data=[
            'code'=>$state,
            'data'=>$data,
            'msg'=>$msg,
            'url'=>$redirect_url,
            'wait'=>$time_out
        ];
        $this->response()->write(json_encode($json_data,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES));
        $this->response()->end();
    }

    public function _list($db,$where,$result=[]){
        $result['total'] = $db->select();
        $result['list'] = $db->where($where)->select();
        return $result;
    }

    public function _form($db, $tpFile) {
        if (!$this->request()->getParsedBody()) {

        }else{

        }
    }

}
