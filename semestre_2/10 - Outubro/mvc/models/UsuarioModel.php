<?php

namespace Model;

use Model\VO\UsuarioVO;
use Util\Database;

final class UsuarioModel extends Model {
    public function selectAll($vo = null) {
        $db = new Database();
        $data = $db->select('SELECT * FROM usuarios');

        $array = [];

        foreach ($data as $row) {
            $vo = new UsuarioVO($row['id'], $row['nome'], $row['login'], $row['senha']);
            array_push($array, $vo);
        }

        return $array;
    }

    //conecta no bd, executa a query e retorna os dados
    public function selectOne($vo = null) {
        $db = new Database();
        $query = 'SELECT * FROM usuarios WHERE id = :id';
        $binds = [':id' => $vo->getId()];
        $data = $db->select($query, $binds);

        if (count($data) === 0) return null;

        return new UsuarioVO($data[0]['id'], $data[0]['nome'], $data[0]['login'], $data[0]['senha']);
    }

    public function insert($vo = null) {
        $db = new Database();
        $query = 'INSERT INTO usuarios (nome, login, senha) VALUES (:nome, :login, :senha)';
        $binds = [
            ':nome' => $vo->getNome(),
            ':login' => $vo->getLogin(),
            ':senha' => sha1($vo->getSenha())
        ];

        $success = $db->execute($query, $binds);

        return $success ? $db->getLastInsertedId() : null;
    }

    public function update($vo = null) {
        $db = new Database();
        $binds = [
            ':nome' => $vo->getNome(),
            ':login' => $vo->getLogin(),
            ':id' => $vo->getId(),
        ];

        if (empty($vo->getSenha())) {
            $query = 'UPDATE usuarios 
                    SET nome = :nome, 
                    login = :login
                    WHERE id = :id';
        } else {
            $binds['senha'] = sha1($vo->getSenha());

            $query = 'UPDATE usuarios 
                    SET nome = :nome, 
                    login = :login,
                    senha = :senha
                    WHERE id = :id';
        }

        return $db->execute($query, $binds);
    }

    public function delete($vo = null) {
        $db = new Database();
        $query = 'DELETE FROM usuarios WHERE id = :id';
        $binds = [':id' => $vo->getId()];

        return $db->execute($query, $binds);
    }

    public function doLogin($vo) {
        $db = new Database();
        $query = 'SELECT * FROM usuarios WHERE login = :login AND senha = :senha';
        $binds = [
            ':login' => $vo->getLogin(),
            ':login' => sha1($vo->getSenha())
        ];

        $data = $db->select($query, $binds);

        if (count($data) == 0) return false;

        $usuario = new UsuarioVO(
            $data[0]['id'],
            $data[0]['nome'],
            $data[0]['login'],
            $data[0]['senha']
        );

        $_SESSION['usuario'] = $usuario;

        return true;
    }
}
