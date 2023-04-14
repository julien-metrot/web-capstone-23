<?php

class Animals extends Controller{
    public function __construct() {
        $this->animalsModel = $this->model("Animalsmodel");
        $this->eventsModel = $this->model("Eventsmodel");

    }

    public function all() {
        $animals = $this->animalsModel->getAllAnimals();
        $data = [
            "title" => "Animals",
            "animals" => $animals,
        ];
        $this->view("animals/all", $data);
    }

    public function single() {
        $animals = $this->animalsModel->getAllAnimals();
        $events = $this->eventsModel->getAllEvents();
        $data = [
            "title" => "Animals",
            "animals" => $animals,
            "events" => $events
            ];
        $this->view("animals/single", $data);
    }

    public function add() {
        $animals = $this->animalsModel->getAllAnimals();
        $data = [
            "title" => "Add New Animal",
            "animals" => $animals,
            "name" => "",
            "gender" => "",
            "breed" => "",
            "status" => "",
            "description" => "",
            "special_needs" => "",
            "friendly" => ""
        ];
        if($_SERVER["REQUEST_METHOD"] == "POST") {

        }
        $this->view("animals/add", $data);
    }
}