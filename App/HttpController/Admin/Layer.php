<?php

namespace App\HttpController\Admin;
use App\HttpController\ViewController;
use App\Model\SystemUser;

/**
 * Class Index
 * @package App\HttpController
 */
class Layer extends ViewController {

    function user_edit(){
        $sysUser = new SystemUser();
        $getData = $this->request()->getQueryParams();
        $id = $getData['id'];
        if($id){
            $result = $sysUser->find($id);
            $this->fetch('admin/layer/user_edit',['result'=>$result]);
        }else{
            $this->response()->withStatus(404);
        }
        
    }


    function index()
    {
        // TODO: Implement index() method.
    }
}
