<?php
/**
 * Created by PhpStorm.
 * User: mallmann
 * Date: 13/07/18
 * Time: 13:49
 */

namespace App\Core;


class Core
{
    public function run()
    {
        $url = '/';

        if (isset($_GET['_url'])){
            $url = $_GET['_url'];
        }

        $params = [];

        if ($url != '/') {
            $url = explode('/', $url);
            array_shift($url);

            $currentController = 'App\\Controller\\' . ucfirst($url[0]).'Controller';
            array_shift($url);

            if (isset($url) && !empty($url[0])){
                $currentAction = $url[0];
                array_shift($url);
            }else{
                $currentAction = 'index';
            }

            if (count($url) > 0){
                $params = $url;
            }


        }else {
            $currentController = 'App\Controller\IndexController';
            $currentAction = 'index';
        }

        if (!class_exists($currentController) || !method_exists($currentController, $currentAction)) {
            $currentController = 'App\Controller\ErrorsController';
            $currentAction = 'notFound';
        }

        $c = new $currentController();
        call_user_func_array([$c,$currentAction], $params);


    }
}
