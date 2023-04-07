<?php

class Contact extends Controller {
    public function __construct() {
        $this->contactModel = $this->model("Contactmodel");
    }

    public function info() {
//        $info = $this->contactModel->getContactInfo();
        $data = [
            "title" => "Contact Info"
//            "info" => $info
        ];
        $this->view("contact/info", $data);
    }
}