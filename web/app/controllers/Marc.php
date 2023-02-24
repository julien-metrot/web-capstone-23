<?php

class Marc extends Controller {
    public function __construct() {
        $this->marcModel = $this->model("Marcmodel");
    }

    public function demo() {
        $users = $this->marcModel->getAllUsers();
        $data = [
            "title" => "Marc's Demo",
            "users" => $users
        ];
        $this->view("marc/demo", $data);
    }

}