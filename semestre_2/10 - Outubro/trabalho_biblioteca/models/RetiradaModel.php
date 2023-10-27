<?php
namespace Model;

use Model\VO\NotaVO;
use Util\Database;

final class RetiradaModel extends Model {
    public function selectAll($vo = null) {
        $db = new Database();
        $data = $db->select('SELECT * FROM notas');

        $array = [];

        foreach ($data as $row) {
            $vo = new NotaVO($row['id'], $row['idaluno'], $row['iddisciplina'], $row['nota']);
            array_push($array, $vo);
        }

        return $array;
    }

    public function selectOne($vo = null) {
        $db = new Database();
        $query = 'SELECT * FROM notas WHERE id = :id';
        $binds = [':id' => $vo->getId()];
        $data = $db->select($query, $binds);

        if (count($data) === 0) return null;

        return new NotaVO($data[0]['id'], $data[0]['idaluno'], $data[0]['iddisciplina'], $data[0]['nota']);
    }

    public function insert($vo = null) {
        $db = new Database();
        $query = 'INSERT INTO notas (idaluno, iddisciplina, nota) VALUES (:idaluno, :iddisciplina, :nota)';
        $binds = [
                    ':idaluno' => $vo->getIdAluno(),
                    ':iddisciplina' => $vo->getIdDisciplina(), 
                    ':nota' => $vo->getNota()
                ];

        $success = $db->execute($query, $binds);

        return $success ? $db->getLastInsertedId() : null;
    }

    public function update($vo = null) {
        $db = new Database();
        $query = 'UPDATE notas 
                    SET idaluno = :idaluno,
                        iddisciplina = :iddisciplina,
                        nota = :nota
                    WHERE id = :id';
        $binds = [
            ':idaluno' => $vo->getIdAluno(),
            ':iddisciplina' => $vo->getIdDisciplina(), 
            ':nota' => $vo->getNota(),
            ':id' => $vo->getId()
        ];

        return $db->execute($query, $binds);
    }

    public function delete($vo = null) {
        $db = new Database();
        $query = 'DELETE FROM notas WHERE id = :id';
        $binds = [':id' => $vo->getId()];

        return $db->execute($query, $binds);
    }
}
