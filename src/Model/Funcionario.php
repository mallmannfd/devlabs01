<?php

namespace App\Model;

use App\Core\Model;
/**
 * Created by PhpStorm.
 * User: mallmann
 * Date: 13/07/18
 * Time: 16:36
 */

class Funcionario extends Model
{
    private $nr_func;

    private $data_nasc;

    private $nome_func;

    private $sobrenome_func;

    private $sexo_func;

    private $contratacao;

    /**
     * @return mixed
     */
    public function getNrFunc()
    {
        return $this->nr_func;
    }

    /**
     * @param mixed $nr_func
     */
    public function setNrFunc($nr_func)
    {
        $this->nr_func = $nr_func;
    }

    /**
     * @return mixed
     */
    public function getDataNasc()
    {
        return $this->data_nasc;
    }

    /**
     * @param mixed $data_nasc
     */
    public function setDataNasc($data_nasc)
    {
        $this->data_nasc = $data_nasc;
    }

    /**
     * @return mixed
     */
    public function getNomeFunc()
    {
        return $this->nome_func;
    }

    /**
     * @param mixed $nome_func
     */
    public function setNomeFunc($nome_func)
    {
        $this->nome_func = $nome_func;
    }

    /**
     * @return mixed
     */
    public function getSobrenomeFunc()
    {
        return $this->sobrenome_func;
    }

    /**
     * @param mixed $sobrenome_func
     */
    public function setSobrenomeFunc($sobrenome_func)
    {
        $this->sobrenome_func = $sobrenome_func;
    }

    /**
     * @return mixed
     */
    public function getSexoFunc()
    {
        return $this->sexo_func;
    }

    /**
     * @param mixed $sexo_func
     */
    public function setSexoFunc($sexo_func)
    {
        $this->sexo_func = $sexo_func;
    }

    /**
     * @return mixed
     */
    public function getContratacao()
    {
        return $this->contratacao;
    }

    /**
     * @param mixed $contratacao
     */
    public function setContratacao($contratacao)
    {
        $this->contratacao = $contratacao;
    }

    /**
     * Função que retorna os funcionários de acordo com o desafio, sem mudar a estrutura da query
     * @return array
     */
    public function buscaFuncionarios(): array
    {
        $sql = "SELECT `nome_func`, `sobrenome_func` FROM `funcionarios` GROUP BY nome_func,sobrenome_func ORDER BY nome_func ASC";
        $r = $this->db->query($sql);
        $r = $r->fetchAll();
        return $r;
    }

}
