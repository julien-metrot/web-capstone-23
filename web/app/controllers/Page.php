<?php

class Page extends Controller {
    public function __construct() {
        $this->postModel = $this->model("Post");
    }
    public function home() {
        $data = ["title" => "Welcome to our website"];
        $this->view("page/home", $data);
    }
    public function about($id = 0)  {
        $data = ["title" => "About Us"];
        $this->view("page/about", $data);
    }
}