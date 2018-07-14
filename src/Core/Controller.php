<?php
/**
 * Created by PhpStorm.
 * User: mallmann
 * Date: 13/07/18
 * Time: 14:17
 */

namespace App\Core;


class Controller
{
    public function loadView($viewName, $viewData = array())
    {
        extract($viewData);
        require_once('src/views/'.$viewName.'.php');
    }

    public function loadTemplate($viewName, $viewData = array())
    {
        require_once 'src/views/template.php';
    }

    public function isPost()
    {
        return $_SERVER['REQUEST_METHOD'] === 'POST';
    }
}
