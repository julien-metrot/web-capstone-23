<?php

class Luke extends Controller {
    public function __construct() {
        $this->lukeModel = $this->model("Lukemodel");
    }

    public function demo() {
        $users = $this->lukeModel->getAllUsers();
        $data = [
            "title" => "Luke's demo",
            "users" => $users
        ];
        $this->view("luke/demo", $data);
    }


}