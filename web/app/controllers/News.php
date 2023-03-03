<?php
class News extends Controller{
    public function __construct() {
        $this->newsModel = $this->model("Newsmodel");
    }

    public function recent() {
        $posts = $this->newsModel->getAllPosts();
        $data = [
            "title" => "Recent News",
            "posts" => $posts
        ];
        $this->view("news/recent", $data);
    }
}