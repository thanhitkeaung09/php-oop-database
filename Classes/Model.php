<?php

class Model extends Database{
//    Read from database

public $table,$sql;


public function __construct($inputTable)
{
    $this->table = $inputTable;
    $this->sql = "select * from $this->table";
}

//    Read from database
    public function fetchAll($sql){
        $query = mysqli_query($this->connect(),$sql);
        $rows = [];
        while ($row = mysqli_fetch_object($query)){
            array_push($rows,$row);
        }
        return $rows;
    }

    public function fetch($sql){
        $query= mysqli_query($this->connect(),$sql);
        return mysqli_fetch_object($query);
    }

    public function all(){
    $sql = "select * from $this->table";
    return $this->fetchAll($sql);
    }

    public function find($id){
    $sql = "select * from $this->table where id=$id";
    return $this->fetch($sql);
    }

    public function where($column,$operator,$value){
    if(str_contains($this->sql,"where")){
        $this->sql .= "and";
    }
    else{
        $this->sql .= "where";
    }
    $this->sql .= "$column $operator '$value'";
    return $this;
    }

    public function orWhere($column,$operator,$value){
    if(str_contains($this->sql,"where")){
        $this->sql .= "||";
    }
    else{
        $this->sql .= "where";
    }
    $this->sql .= "$column $operator '$value'";
    return $this;
    }

}