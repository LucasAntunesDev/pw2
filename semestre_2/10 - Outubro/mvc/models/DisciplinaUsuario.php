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
            $vo = new UsuarioVO($row['id'], $row['nome']);
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
        $query = 'INSERT INTO usuarios (nome) VALUES (:nome)';
        $binds = [':nome' => $vo->getNome()];

        $success = $db->execute($query, $binds);

        return $success ? $db->getLastInsertedId() : null;
    }

    public function update($vo = null) {
        $db = new Database();
        $query = 'UPDATE usuarios 
                    SET nome = :nome 
                    WHERE id = :id';
        $binds = [
            ':nome' => $vo->getNome(),
            ':id' => $vo->getId()
        ];

        return $db->execute($query, $binds);
    }

    public function delete($vo = null) {
        $db = new Database();
        $query = 'DELETE FROM usuarios WHERE id = :id';
        $binds = [':id' => $vo->getId()];

        return $db->execute($query, $binds);
    }
}
