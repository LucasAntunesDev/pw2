<?php

namespace Model;

use Model\VO\RetiradaVO;
use Util\Database;

final class RetiradaModel extends Model {
    public function selectAll($vo = null) {
        $db = new Database();
        $data = $db->select('SELECT * FROM retiradas');

        $array = [];

        foreach ($data as $row) {
            $vo = new RetiradaVO(
                $row['id'],
                $row['id_aluno'],
                $row['id_livro'],
                $row['data_retirada'],
                $row['data_devolucao']
            );
            array_push($array, $vo);
        }

        return $array;
    }

    public function selectOne($vo = null) {
        $db = new Database();
        $query = 'SELECT * FROM retiradas WHERE id = :id';
        $binds = [':id' => $vo->getId()];
        $data = $db->select($query, $binds);

        if (count($data) === 0) return null;

        return new RetiradaVO(
            $data[0]['id'],
            $data[0]['id_aluno'],
            $data[0]['id_livro'],
            $data[0]['data_retirada'],
            $data[0]['data_devolucao']
        );
    }

    public function insert($vo = null) {
        $db = new Database();
        $query = 'INSERT INTO retiradas (id_aluno, id_livro, data_retirada, data_devolucao) VALUES 
        (:id_aluno, :id_livro, :data_retirada, :data_devolucao)';
        $binds = [
            ':id_aluno' => $vo->getIdAluno(),
            ':id_livro' => $vo->getIdLivro(),
            ':data_retirada' => $vo->getDataRetirada(),
            ':data_devolucao' => $vo->getDataDevolucao()
        ];

        $success = $db->execute($query, $binds);

        return $success ? $db->getLastInsertedId() : null;
    }

    public function update($vo = null) {
        $db = new Database();
        $query = 'UPDATE retiradas 
                    SET id_aluno = :id_aluno,
                        id_livro = :id_livro
                        -- retirada = :retirada
                    WHERE id = :id';
        $binds = [
            ':id_aluno' => $vo->getIdAluno(),
            ':id_livro' => $vo->getIdLivro(),
            // ':data_retirada' => $vo->getDataRetirada(),
            // ':data_devolucao' => $vo->getDataDevolucao(),
            ':id' => $vo->getId()
        ];

        return $db->execute($query, $binds);
    }

    public function delete($vo = null) {
        $db = new Database();
        $query = 'DELETE FROM retiradas WHERE id = :id';
        $binds = [':id' => $vo->getId()];

        return $db->execute($query, $binds);
    }
}
