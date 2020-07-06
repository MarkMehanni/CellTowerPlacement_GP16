<?php
  header ('Content-Type: text/html; charset=UTF-8');

class DB{
    private static function connect(){
        $pdo = new PDO('mysql:host=localhost;dbname=demo;charset=utf8;collation=utf8_unicode_ci', 'root', '');

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $pdo;
    }
        public static function query($query, $params = array()){
            $statement = self::connect()->prepare($query);
            $statement->execute($params);

            if(explode(' ', $query)[0] == 'SELECT'){
            $data = $statement->fetchAll();
            return $data;
            }
    }
}
?>
