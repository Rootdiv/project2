<?php
abstract class Unit
{
  private mysqli $mysqli;
  private int $id;
  private array $table = [];

  public function __construct(int $id){
    $this->id = $id;
    $this->mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    $this->mysqli->query("SET lc_time_names = 'ru_RU'");
    $this->mysqli->query("SET NAMES 'utf8'");
  }

  public function getTable($table){
    $this->table = $table;
  }

  public function setTable(){
    return $this->table;
  }

  public function title(){
    return $this->getField('title');
  }

  public function getField($field){
    return ($this->getLine())[$field];
  }

  public function getLine():array{
    $result = mysqli_query($this->mysqli, 'SELECT * FROM '.$this->setTable().' WHERE id='.$this->id);
    $row = mysqli_fetch_assoc($result);
    return $row;
  }

  public function deleteLine(){
    $result = mysqli_query($this->mysqli, 'DELETE FROM '.$this->setTable().' WHERE id='.$this->id);
    if($result){
      return true;
    }
    return false;
  }

  public function createLine(array $fields, array $values){
    $fields_line = implode(',', $fields);
    $values_line = '';
    foreach($values as $value){
      $value = $this->mysqli->real_escape_string($value);
      $values_line = $values_line."'".$value."',";
    }
    $values_line = trim($values_line, ',');
    $result = mysqli_query($this->mysqli, "INSERT INTO ".$this->setTable()."($fields_line) VALUES($values_line)");
    if($result == false){
      printf("Ошибка: %s\n", mysqli_errno($this->mysqli));
      printf("Ошибка подключения: %s\n", mysqli_connect_error());
    }
    if($result){
      return true;
    }
    return false;
  }

  public function getAllUnitsId(){
    $arr = [];
    $result = mysqli_query($this->mysqli, 'SELECT id FROM '.$this->setTable());
    while($row = mysqli_fetch_assoc($result)){
      $arr[] = $row['id'];
    }
    return $arr;
  }
}