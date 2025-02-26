<?php
require "models/Model.php";

class Blog extends Model {

    protected static function getTableName(): string
    {
        return "posts";
    }   

    public function index() {
        $posts = Blog::all();
        return $posts;
    }

    public function create(string $title, string $body) {
        $sql = "INSERT INTO " . static::getTableName() . " (title, body) VALUES (:title, :body)";
        $params = [
            "title" => $title,
            "body" => $body
        ];
        self::$db->query($sql, $params);
    }

}
