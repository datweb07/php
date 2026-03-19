<?php

class CoreModel
{
    private $conn;
    public function __construct()
    {
        $this->conn = Database::connectPDO();
    }

    // truy vấn data
    public function getAll($sql)
    {
        $stm = $this->conn->prepare($sql);

        $stm->execute();

        $result = $stm->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    // đếm số dòng
    public function getRows($sql)
    {
        $stm = $this->conn->prepare($sql);

        $stm->execute();

        $result = $stm->rowCount();
        return $result;
    }

    public function getOne($sql)
    {
        $stm = $this->conn->prepare($sql);

        $stm->execute();

        $result = $stm->fetch(PDO::FETCH_ASSOC);
        return $result;
    }


    // insert data
    public function insertData($table, $data)
    {
        $keys = array_keys($data);
        $column = implode(',', $keys);
        $place_holder = ':' . implode(',:', $keys);


        $sql = "INSERT INTO $table ($column) VALUES ($place_holder)";       // :name: placeholder
        echo $sql;
        $stm = $this->conn->prepare($sql);                                  // bảo vệ khỏi tấn công như SQL Injection


        // thực thi 
        $stm->execute($data);
    }



    // update data
    public function updateData($table, $data, $condition = '')
    {
        $update = '';

        foreach ($data as $key => $value) {
            $update .= $key . ' = :' . $key . ', ';
        }

        $update = rtrim($update, ', ');

        echo $update;

        if (!empty($condition)) {
            $sql = "UPDATE $table SET $update WHERE $condition";
        } else {
            $sql = "UPDATE $table SET $update";
        }

        $stm = $this->conn->prepare($sql);



        $stm->execute($data);
    }



    // delete data
    public function deleteData($table, $condition = '')
    {
        if (!empty($condition)) {
            $sql = "DELETE FROM $table WHERE $condition";
        } else {
            $sql = "DELETE FROM $table";
        }

        $stm = $this->conn->prepare($sql);


        $stm->execute();
    }


    // lấy ID vừa insert
    public function lastQuery()
    {
        return $this->conn->lastInsertId();
    }

}

?>