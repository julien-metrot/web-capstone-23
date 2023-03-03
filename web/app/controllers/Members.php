<?php

class Members extends Controller{
    public function __construct() {
        $this->membersModel = $this->model("MembersModel");
    }

    public function info() {
        $members = $this->membersModel->getAllMembers();
        $data = [
            "title" => "Members Info",
            "members" => $members,
        ];
        $this->view("members/info", $data);
    }
}