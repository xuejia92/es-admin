<?php

namespace App\HttpController\Admin;

use App\HttpController\BasicAdmin;
use App\HttpController\ViewController;
use EasySwoole\Core\Utility\File;
use EasySwoole\EasySwooleEvent;
use think\Db;

/**
 * Class Index
 * @package App\HttpController
 */
class Common extends ViewController {
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

    function upload() {
        $filed = $this->request()->getParsedBody('field');
        $files = $this->request()->getSwooleRequest()->files;
        $dir = $this->request()->getParsedBody('dir');
        $name = $this->request()->getParsedBody('name');
        $tempFile = $files['file']['tmp_name'];
        $dir = $dir?$dir:'';
        $upfile = EASYSWOOLE_ROOT."/Public/upload/".$dir.'/';
        $findfile = '/upload/'.$dir.'/'.$name;
        File::createDir($upfile);
        $res = File::copyFile($tempFile,$upfile.$name,true);
        if($res){
            $this->ajax(1,'上传成功',$findfile);
        }else{
            $this->ajax(0,'上传失败');
        }
    }

    function index()
    {

    }
}
