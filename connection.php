<?php

class DatabaseHandler {
  public const ADDRESS_DB = "localhost";
  const NAME_DB = "socmed";
  const USERNAME_DB = "root";
  const PASSWORD_DB = "";

  public static function running($query){
    // $host = DatabaseHander::ADD
    try {
      $conn = new PDO('mysql:host='.self::ADDRESS_DB.';dbname='.self::NAME_DB.'', self::USERNAME_DB, self::PASSWORD_DB);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $stmt = $conn->prepare($query);
      $stmt->execute();
      
        // set the resulting array to associative
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetchAll();
        // foreach(new
      } catch(PDOException $e) {
      return "Connection failed: " . $e->getMessage();
      }
  }

  public static function select_database($kolom, $table, $conditions = [], $order = [], $limit = null){
    // $query = '';
    $field = explode(',', $kolom);
    $fieldtext = '';
    foreach ($field as $value) {
      $fieldtext .= $value . ',';
    }
    $field = substr($fieldtext, 0, -1);
    $query = 'SELECT '.$field.' FROM '.$table.' ';
    if (!empty($conditions)) {
      $cond = 'WHERE ';
      foreach ($conditions as $key => $value) {
        $cond .= $key .'='. strtolower("'$value'") . 'AND ';
      }
      $query .= substr($cond, 0, -4);
    }

    if (!empty($order)) {
      foreach ($order as $key => $value) {
        $query .= " ORDER BY $key $value" ;
      }
    }

    if (!empty($limit)) {
      $query .= " LIMIT $limit";
    }
    // echo $query;
    return self::running($query);
  }
  public function insert_database($table, $kolom = []){
    if (!empty($kolom)) {
      $keyText = '';
      $valText = '';
      foreach ($kolom as $key => $value) {
        $keyText .= $key .',' ;
        $valText .= $value .',' ;
      }
      $fieldKey = substr($keyText, 0, -1);
      $fieldVal = substr($valText, 0, -1);
      $query = 'INSERT INTO '.$table.' ('.$fieldKey.') VALUES ('.$fieldVal.')'; 
    }
    // return $query;

    return self::running($query);
  }


}

