<?php
/**
 * Created by PhpStorm.
 * User: mallmann
 * Date: 13/07/18
 * Time: 13:21
 */

namespace App\Controller;


use App\Core\Controller;
use App\Model\Funcionario;

class IndexController extends Controller
{
    public function index()
    {
        $funcionario = new Funcionario();

        $dados = [
            'funcionarios' => $funcionario->buscaFuncionarios()
        ];

        header('Content-type: text/html; charset=ISO-8859-1');
        $this->loadTemplate('index/index', $dados);
    }
}
