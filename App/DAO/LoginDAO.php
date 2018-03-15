<?php
/**
 * Created by PhpStorm.
 * User: 34987932253
 * Date: 08/03/2018
 * Time: 21:19
 */

namespace App\DAO;


class LoginDAO extends Conexao
{
    public function inserir($usuario){

        $sql="insert into login(username,senha,permissoes,idUsuario) values(:username,:senha,:permissoes,:idUsuario)";


        try{

            $inserir = $this->conexao->prepare($sql);
            $inserir->bindValue(":username",$usuario->getUsername());
            $inserir->bindValue(":senha",$usuario->getSenha());
            $inserir->bindValue(":permissoes",$usuario->getPermissoes());
            $inserir->bindValue(":idUsuario",$usuario->getIdUsuario());
            $inserir->execute();
            return true;

        }catch (\PDOException $e){
            echo"<div class='alert-danger'>{$e->getMessage()}</div>";
            return false;
                                }
    }


    public function alterar($usuario){

        $sql="update login set username = :username,senha = :senha, permissoes = :permissoes,idUsuario = :idUsuario where idLogin = :idLogin";
        try{
            $alterar = $this->conexao->prepare($sql);
            $alterar->bindValue(":username",$usuario->getUsername());
            $alterar->bindValue(":senha",$usuario->getSenha());
            $alterar->bindValue(":permissoes",$usuario->getPermissoes());
            $alterar->bindValue(":idUsuario",$usuario->getIdUsuario());
            $alterar->bindValue(":idLogin",$usuario->getIdLogin());

            $alterar->execute();
            return true;

        }catch (\PDOException $e){
            echo"<div class='alert-danger'>{$e->getMessage()}</div>";
            return false;
        }
    }


    public function excluir($usuario){
        $sql="delete from login where idLogin = :idLogin";
        try{
            $excluir = $this->conexao->prepare($sql);
            $excluir->bindValue(":idLogin",$usuario->getIdLogin());

            $excluir->execute();
            return true;

        }catch (\PDOException $e){
            echo"<div class='alert-danger'>{$e->getMessage()}</div>";
            return false;
        }

    }


    public function logar($login){
        $sql = "select * from login where username = :username and senha = :senha";
        try{
            $consulta =$this->conexao->prepare($sql);
            $consulta->bindValue(":username",$login->getUsername());
            $consulta->bindValue(":senha",$login->getSenha());
            $resultado = $consulta->fetch();
            session_start();
            $_SESSION['permissao']=$resultado['permissao'];
            $_SESSION['idLogin']=$resultado['idLogin'];
            return $resultado;

        }catch (\PDOException $e){
            echo "<div class='alert alert-danger'>{$e->getMessage()}</div>";
            return false;
        }

    }


    public function logoff(){
        session_start();
        unset($_SESSION['permissao']);
        unset($_SESSION['idLogin']);
        session_destroy();
        header("Location: login.php");
    }
    public function statusLogin(){
    if (empty($_SESSION['id']));
    header("Location: login.php");


    }


}