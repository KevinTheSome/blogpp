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

    public function store($title, $body) {
        $values = ["title" => $title, "body" => $body];
        $response = Blog::create($values);
        return $response;
    }

}
