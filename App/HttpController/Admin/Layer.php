<?php

namespace App\HttpController\Admin;
use App\HttpController\ViewController;

/**
 * Class Index
 * @package App\HttpController
 */
class Layer extends ViewController {

    function user_edit(){
        $this->fetch('admin/layer/user_edit');
    }


    function index()
    {
        // TODO: Implement index() method.
    }
}
