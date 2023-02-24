<?php

class Lauren2 extends Controller {
    public function __construct() {
        $this->laurenModel =  $this->model("Laurenmodel");
    }

    public function demo() {
        $users = $this->laurenModel->getAllUsers();
        $data = [
            "title" => "Lauren2's Demo",
            "users" => $users
        ];
        $this->view("lauren/demo", $data);
    }

}