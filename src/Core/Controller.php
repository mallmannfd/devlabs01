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

    public function showMessage()
    {
        if (isset($_SESSION['message'])){ ?>
            <div class="alert alert-<?=$_SESSION['message']['type']?>">
                <?=$_SESSION['message']['message']?>
            </div>
            <?php
            unset($_SESSION['message']);
        }
    }

    public function flashMessage($type, $message)
    {
        $_SESSION['message'] = [
            'type' => $type,
            'message' => $message
        ];
    }

}
