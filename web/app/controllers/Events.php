<?php
 class Events extends Controller {
     public function __construct() {
         $this->eventsModel = $this->model("Eventsmodel");
     }
     public function upcoming () {
         $events = $this->eventsModel->getAllEvents();
         $data = [
             "title" => "Upcoming events",
             "events" => $events,
         ];
         $this->view("events/upcoming", $data);
     }
     public function add(){
         $data = [
             "title" => "Add New Event",
             "event_title" => "",
             "event_description" => "",
             "event_date" => "",
             "event_address" => "",
             "event_title_error" => "",
             "event_description_error" => "",
             "event_date_error" => "",
             "event_address_error" => "",
         ];
         if($_SERVER["REQUEST_METHOD"] == "POST") {

             $data["event_title"] = sanitize($_POST["event_title"]);
             $data["event_description"] = sanitize($_POST["event_description"]);
             if(empty($data["event_title"])) {
                 $data["event_title_error"] = " Event Title is required";
             }
             if(empty($data["event_description"])) {
                 $data["event_description_error"] = "Description is required";
             }
             if(empty($data["event_date"])) {
                 $data["event_date_error"] = "Date is required";
             }
             if(empty($data["event_address"])) {
                 $data["event_address_error"] = "Address is required";
             }
         }
                 $this->view("events/add", $data);
     }

     public function event_single($id){
         $event = $this->eventsModel->getsingleEvent($id);
         $data = [
             "title" => $event->title,
             "event" => $event
         ];
         $this->view("events/event_single", $data);
     }

 }