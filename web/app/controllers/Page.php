<?php

class Page extends Controller {
    public function __construct() {
        
    }

    public function home() {
        $data = [
            "title" => "Home"
        ];
        $this->view("page/home", $data);
    }

    public function about() {
        $data = [
            "title" => "About Us"
        ];
        $this->view("page/about", $data);
    }
    
}