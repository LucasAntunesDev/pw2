<?php

namespace Model;

use Model\VO\LivroVO;
use Util\Database;

final class LivroModel extends Model {
    public function selectAll($vo = null) {
        $db = new Database();
        $data = $db->select('SELECT * FROM livros');

        $array = [];

        foreach ($data as $row) {
            $vo = new LivroVO(
                $row['id'],
                $row['titulo'],
                $row['autores'],
                $row['editora'],
                $row['qtd_exemplares'],
                $row['isbn']
            );
            array_push($array, $vo);
        }

        return $array;
    }

    //conecta no bd, executa a query e retorna os dados
    public function selectOne($vo = null) {
        $db = new Database();
        $query = 'SELECT * FROM livros WHERE id = :id';
        $binds = [':id' => $vo->getId()];
        $data = $db->select($query, $binds);

        if (count($data) === 0) return null;

        return new LivroVO(
            $data[0]['id'],
            $data[0]['titulo'],
            $data[0]['autores'],
            $data[0]['editora'],
            $data[0]['qtd_exemplares'],
            $data[0]['isbn']
        );
    }

    public function insert($vo = null) {
        $db = new Database();
        $query = 'INSERT INTO livros (titulo, autores, editora, qtd_exemplares, isbn) 
                  VALUES (:titulo, :autores, :editora, :qtd_exemplares, :isbn)';
        $binds = [
            ':titulo' => $vo->getTitulo(),
            ':autores' => $vo->getAutores(),
            ':editora' => $vo->getEditora(),
            ':qtd_exemplares' => $vo->getQuantidadeExemplares(),
            ':isbn' => $vo->getISBN()
        ];

        $success = $db->execute($query, $binds);

        return $success ? $db->getLastInsertedId() : null;
    }

    public function update($vo = null) {
        $db = new Database();
        $query = 'UPDATE livros 
                    SET titulo = :titulo,
                        autores = :autores,
                        editora = :editora,
                        qtd_exemplares = :qtd_exemplares,
                        isbn = :isbn
                    WHERE id = :id';
        $binds = [
            ':titulo' => $vo->getTitulo(),
            ':autores' => $vo->getAutores(),
            ':editora' => $vo->getEditora(),
            ':qtd_exemplares' => $vo->getQuantidadeExemplares(),
            ':isbn' => $vo->getISBN(),
            ':id' => $vo->getId()
        ];

        return $db->execute($query, $binds);
    }

    public function delete($vo = null) {
        $db = new Database();
        $query = 'DELETE FROM livros WHERE id = :id';
        $binds = [':id' => $vo->getId()];

        return $db->execute($query, $binds);
    }
}
