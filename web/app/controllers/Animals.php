<?php

class Animals extends Controller{
    public function __construct() {
        $this->animalsModel = $this->model("Animalsmodel");
    }

    public function all() {
        $animals = $this->animalsModel->getAllAnimals();
        $data = [
            "title" => "Animals",
            "animals" => $animals,
        ];
        $this->view("animals/all", $data);
    }
}