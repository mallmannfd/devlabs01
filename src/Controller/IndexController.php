<?php
/**
 * Created by PhpStorm.
 * User: mallmann
 * Date: 13/07/18
 * Time: 13:21
 */

namespace App\Controller;


use App\Core\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $this->loadTemplate('index/index');
    }
}
