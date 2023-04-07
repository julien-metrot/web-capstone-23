<?php

class Page extends Controller {
    public function __construct() {
        $this->eventsModel = $this->model("Eventsmodel");
        $this->animalsModel = $this->model("Animalsmodel");
    }

    public function home() {
        $animals = $this->animalsModel->getAllAnimals();
        $events = $this->eventsModel->getAllEvents();
        $data = [
            "title" => "Home",
            "animals" => $animals,
            "events" => $events
        ];
        $this->view("page/home", $data);
    }

    public function about() {
        $data = [
            "title" => "About Us"
        ];
        $this->view("page/about", $data);
    }
    
}