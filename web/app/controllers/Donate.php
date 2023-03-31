<?php
class Donate extends Controller {
    public function __construct() {
        $this->donateModel = $this->model("Donatemodel");
    }

    public function history() {
        $list = $this->donateModel->getAllDonations();
        $data = [
            "title" => "Donations",
            "list" => $list
        ];
        $this->view("donate/history", $data);
    }

    public function donate() {
//        $list = $this->donateModel->getAllDonations();
        $data = [
            "title" => "Donations",
//            "list" => $list
        ];
        $this->view("donate/donate", $data);
    }
}