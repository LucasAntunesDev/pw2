<?php
namespace Model;

use Model\VO\AlunoVO;
use Util\Database;

final class AlunoModel extends Model
{
    public function selectAll($vo = null)
    {
        $db = new Database();
        $data = $db->select('SELECT * FROM alunos');

        $array = [];

        foreach ($data as $row) {
            $vo = new AlunoVO($row['id'], $row['nome'], $row['matricula'], $row['url_foto']);
            array_push($array, $vo);
        }

        return $array;
    }

    //conecta no bd, executa a query e retorna os dados
    public function selectOne($vo = null)
    {
        $db = new Database();
        $query = 'SELECT * FROM alunos WHERE id = :id';
        $binds = [':id' => $vo->getId()];
        $data = $db->select($query, $binds);

        if (count($data) === 0)
            return null;

        // return new AlunoVO($data[0]['id'], $data[0]['nome'], $data[0]['matricula'], $data['url_foto']);
        return new AlunoVO($data[0]['id'], $data[0]['nome'], $data[0]['matricula']);
    }
    public function insert($vo = null)
    {
        $db = new Database();
        $query = 'INSERT INTO alunos (nome, matricula, url_foto) VALUES (:nome, :matricula, :url_foto)';
        $binds = [
            ':nome' => $vo->getNome(),
            ':matricula' => $vo->getMatricula(),
            ':url_foto' => $vo->getURLFoto()
        ];

        $success = $db->execute($query, $binds);

        return $success ? $db->getLastInsertedId() : null;
    }

    public function update($vo = null)
    {
        $db = new Database();
        $binds = [
            ':nome' => $vo->getNome(),
            ':matricula' => $vo->getMatricula(),
            ':id' => $vo->getId()
        ];

        if (empty($vo->getURLFoto())) {
            $query = '  UPDATE alunos 
                        SET nome = :nome,
                        matricula = :matricula
                        WHERE id = :id';
        } else {
            $query = 'UPDATE alunos 
                    SET nome = :nome,
                    matricula = :matricula,
                    url_foto = :url_foto
                    WHERE id = :id';
            $binds[':url_foto'] = $vo->getURLFoto();
        }

        return $db->execute($query, $binds);
    }

    public function delete($vo = null)
    {
        $db = new Database();
        $query = 'DELETE FROM alunos WHERE id = :id';
        $binds = [':id' => $vo->getId()];

        return $db->execute($query, $binds);
    }
}
