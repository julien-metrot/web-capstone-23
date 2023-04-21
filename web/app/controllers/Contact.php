<?php

class Contact extends Controller {
    public function __construct() {
        $this->contactModel = $this->model("Contactmodel");
    }

    public function info() {
        $data = [
            "title" => "Contact Info"
        ];
        $this->view("contact/info", $data);
    }

    public function thankyou() {
        $data = [
            "title" => "Contact Info"
        ];
        $this->view("contact/thankyou", $data);
    }
}