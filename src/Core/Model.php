<?php
/**
 * Created by PhpStorm.
 * User: mallmann
 * Date: 13/07/18
 * Time: 14:10
 */

namespace App\Core;


class Model
{
    /**
     * @var \PDO
     */
    protected $db;

    protected $source = '';

    function __construct()
    {
        $this->db = DB::getConnection();
    }

    public function setSource($source)
    {
        $this->source = $source;
    }

    public function getSource(): string
    {
        return $this->source;
    }

    /**
     * Método para inserir um objeto no banco de dados
     * @return bool
     */
    public function insere(): bool
    {
        $tabela = get_called_class();

        var_dump($tabela);exit;

        $sql = "INSERT INTO :tabela ()";
    }
}
