<?php

namespace App\HttpController\Admin;

use App\HttpController\ViewController;
use App\Model\SystemUser;
use App\Utility\SysConst;

class Login extends ViewController
{
    public function index()
    {
        if (!$this->request()->getParsedBody()) {
            return $this->fetch('admin/login/index', ['title' => '用户登录']);
        }else{
            // 输入数据效验
            $username = $this->request()->getParsedBody('username');
            $password = $this->request()->getParsedBody('password');
            if(strlen($username) < 4 || strlen($password) < 4 ){
                return $this->ajax(0,'账号或密码长度不能少于4位有效字符!');
            }

            $systemUser = new SystemUser();
            $loginRes = $systemUser->checkLogin($username,$password);
            if($loginRes[0]){
                $this->session()->sessionStart();
                $this->session()->set(SysConst::COOKIE_USER_SESSION_NAME,$loginRes[2]);
                $this->ajax(1,$loginRes[1],'','/admin/index/index');
            }else{
                $this->ajax(0,$loginRes[1]);
            }
        }
    }

    /**
     * 退出登录
     */
    public function out()
    {
//        session('user') && LogService::write('系统管理', '用户退出系统成功');
        !empty($_SESSION) && $_SESSION = [];
        [session_unset(), session_destroy()];
        $this->success('退出登录成功！', 'admin/login');
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
    }
}
