<?php
require_once "models/Blog.php";
class BlogController {
  
    public function index() {
        $blogModel = new Blog();
        $posts = $blogModel->index();
        require "views/blog/index.view.php";
    }

    public function create() {
        $blogModel = new Blog();
        $posts = $blogModel->index();
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $title = $_POST["title"];
            $body = $_POST["body"];
            $blogModel->create($title, $body);
        }
        require "views/blog/index.view.php";
    }

    public function delete() {
        $blogModel = new Blog();
        $posts = $blogModel->index();
        require "views/blog/index.view.php";
    }

    public function show() {
        $blogModel = new Blog();
        $posts = $blogModel->index();
        require "views/blog/index.view.php";
    }

    public function edit() {
        $blogModel = new Blog();
        $posts = $blogModel->index();
        require "views/blog/index.view.php";
    }

}