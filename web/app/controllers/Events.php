<?php
 class Events extends Controller {
     public function __construct() {
         $this->eventsModel = $this->model("Eventsmodel");
     }
     public function upcoming () {

         $events = $this->eventsModel->getAllEvents();
         $data = [
             "title" => "Upcoming events",
             "events" => $events
         ];
         $this->view("events/upcoming", $data);
     }

 }