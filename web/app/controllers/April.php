<?php

class April extends Controller {
    public function __construct() {
        $this-> aprilModel = $this->model("Aprilmodel");
    }

    public function demo() {
        $users = $this->aprilModel->getAllusers();
        $data = [
            "title" => "April's Demo",
            "users" => $users,
        ];
        $this->view("april/demo", $data);
    }

}