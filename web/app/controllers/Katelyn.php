<?php

class Katelyn extends Controller {
    public function __construct() {
        $this->katelynModel = $this->model( "Katelynmodel");
    }

    public function demo() {
        $users = $this->katelynModel->getAllUsers();
        $data = [
            "title" => "Katelyn's Demo",
            "users" => $users
        ];
        $this->view("katelyn/demo", $data);
    }

}