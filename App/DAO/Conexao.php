<?php


namespace App\DAO;


class Conexao
{
    protected $conexao;
    private $host = "localhost";
    private $db = "tj";
    private $user = "root";
    private $senha = "Suporte99";

    public function __construct()
    {
        $this->conexao = new \PDO("mysql:host={$this->host};dbname={$this->db}", $this->user,$this->senha);
        $this->conexao->setAttribute(\PDP::ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);

    }



}