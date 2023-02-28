<?php

class Julien extends Controller {
    public function __construct() {
        $this->julienModel = $this->model("Julienmodel");
    }

    public function demo() {
        $users = $this->julienModel->getAllUsers();
        $data = [
            "title" => "Julien's Demo",
            "users" => $users,
        ];
        $this->view("julien/demo", $data);
    }
}