<?php
require "Database.php";

abstract class Model {
    protected static $db;
    abstract protected static function getTableName(): string;

    public static function init() {
        if (!self::$db) {
          self::$db = new Database();
        }
    }

    public static function all() {
        self::init();
        $sql = "SELECT * FROM " . static::getTableName();
      
        $records = self::$db->query($sql)->fetchAll();
        return  $records;
    }

    public static function create($values) {
        self::init();
        $keyArr =[];
        $valueArr =[];
        foreach ($values as $key => $value) {
            $keyArr[] = $key;
            $valueArr[] = $key;
        }

        $parmsStr = ":";
        $valueStr = implode(", ", $keyArr);
        $parmsStr += implode(", : ", $keyArr);

        $sql = "INSERT INTO " . static::getTableName() . " (" . $valueStr . ") VALUES (". $parmsStr .")";
        $results = self::$db->query($sql, $values);
        return var_dump($results);
    }
}
