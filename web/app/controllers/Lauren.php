<?php

class Lauren extends Controller {
    public function __construct() {
        $this->laurenModel =  $this->model("Laurenmodel");
    }

    public function demo() {
        $users = $this->laurenModel->getAllUsers();
        $data = [
            "title" => "Lauren's Demo",
            "users" => $users
        ];
        $this->view("lauren/demo", $data);
    }

}