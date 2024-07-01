<?php

namespace App\Service\Blog;

use App\Database\Db;
use PDO;

class Blog
{
    public static function insert(string $table, array $data)
    {
        $sql = "INSERT INTO $table (title, content)";
        foreach ($data as $key => $value) {
            $values[] = ":$key";
        }

        $sql .= " VALUES (" . implode(', ', $values) . ")";
        $stmt = Db::initDb()->prepare($sql);
        $stmt->execute($data);
        return Db::lastId();
    }

    public static function select(string $table, array $where = null, bool $all = false)
    {
        $sql = "SELECT * FROM $table";

        if (! empty($where)) {
            $data = [];

            foreach ($where as $key => $value) {
                $data[] = "$key = :$key";
            }

            $sql .= " WHERE " . implode(', ', $data);
        }


        $stmt = Db::initDb()->prepare($sql);


        $stmt->execute($where);

        if ($all) {
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } else {
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
    }

    public static function update(string $table, array $data, string $where)
    {
        $values = [];
        foreach ($data as $key => $value) {
            $values[] = "$key = :$key";
        }

        $sql = "UPDATE $table SET " . implode(', ', $values) . " WHERE $where";
        $stmt = Db::initDb()->prepare($sql);
        $stmt->execute($data);
    }

    public static function delete(string $table, array $where)
    {
        $sql = "DELETE FROM $table ";
        $data = [];

        foreach ($where as $key => $value) {
            $data[] = "$key = :$key";
        }

        $sql .= " WHERE " . implode(', ', $data);
        $stmt = Db::initDb()->prepare($sql);
        $stmt->execute($where);
    }
}