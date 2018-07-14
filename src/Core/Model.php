<?php
/**
 * Created by PhpStorm.
 * User: mallmann
 * Date: 13/07/18
 * Time: 14:10
 */

namespace App\Core;


use ReflectionClass;

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
     */
    public function insere(): void
    {
        $tabela = $this->getSource();

        if (empty($this->getSource())) {

            $tabela = explode('\\', get_called_class());
            $tabela = end($tabela);
            $tabela = strtolower($tabela) . 's';

        }

        $campos = $this->formataCamposTabela();

        $valores = implode(', ', array_values($campos));
        $campos = implode(', ', array_keys($campos));

        $sql = "INSERT INTO {$tabela} ({$campos}) VALUES ({$valores})";
        $this->db->query($sql);
    }

    /**
     * Método responsável por formatar e devolver um array com os campos da tabela
     * @return array
     */
    private function formataCamposTabela(): array
    {
        $array = array_keys((array) $this);

        $campos = [];
        foreach ($array as $key => &$value) {
            if (false === strpos($value, get_called_class())) {
                unset($array[$key]);
                continue;
            }

            $value = str_replace(get_called_class(), '', $value);
            $function  = 'get' . ucfirst(trim($value));

            $fieldValue = $this->$function();

            if (is_null($fieldValue)){
                unset($array[$key]);
                continue;
            }

            $campos[trim($value)] = "'{$fieldValue}'";

        }

        return $campos;
    }
}
