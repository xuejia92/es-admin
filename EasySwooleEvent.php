<?php
/**
 * Created by PhpStorm.
 * User: yf
 * Date: 2018/1/9
 * Time: 下午1:04
 */

namespace EasySwoole;

use App\Process\Inotify;
use \EasySwoole\Core\AbstractInterface\EventInterface;
use EasySwoole\Core\Swoole\Process\ProcessManager;
use \EasySwoole\Core\Swoole\ServerManager;
use \EasySwoole\Core\Swoole\EventRegister;
use \EasySwoole\Core\Http\Request;
use \EasySwoole\Core\Http\Response;
use EasySwoole\Core\Utility\File;
use think\Db;
use EasySwoole\Whoops\Runner;
use Whoops\Handler\PrettyPageHandler;

Class EasySwooleEvent implements EventInterface {

    public static function frameInitialize(): void
    {
        date_default_timezone_set('Asia/Shanghai');

        // 可以进行更多设置，默认为以下设置
        $options = [
            'auto_conversion' => false,                    // 开启AJAX模式下自动转换为JSON输出
            'detailed'        => false,                    // 开启详细错误日志输出
            'information'     => '发生内部错误,请稍后再试'   // 不开启详细输出的情况下 输出的提示文本
        ];
        $whoops  = new Runner($options);
        // 注册异常事件处理
        $whoops->pushHandler(new PrettyPageHandler);
        $whoops->register();

        $Conf  = Config::getInstance();
        $files = File::scanDir(EASYSWOOLE_ROOT .'/App/Config');
        foreach ($files as $file) {
            $data = require_once $file;
            $Conf->setConf(strtolower(basename($file, '.php')), (array)$data);
        }
        $dbConf = Config::getInstance()->getConf('database');
        Db::setConfig($dbConf);


    }

    public static function mainServerCreate(ServerManager $server,EventRegister $register): void
    {
        ProcessManager::getInstance()->addProcess('autoReload', Inotify::class);  
    }

    public static function onRequest(Request $request,Response $response): void
    {

    }

    public static function afterAction(Request $request,Response $response): void
    {

    }
}