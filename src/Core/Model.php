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

    function __construct()
    {
        $this->db = DB::getConnection();
    }

}
