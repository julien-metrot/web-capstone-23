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

     public function event_single($id){
         $event = $this->eventsModel->getsingleEvent($id);
         $data = [
             "title" => $event->title,
             "event" => $event,
             "description" => $event->description,
         ];
         $this->view("events/event_single", $data);
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
             if(empty($data["post_title_error"]) && empty($data["post_body_error"])) {
                 try {
                     if ($this->eventsModel->addEvent($data)) {
                         // data successfully added
                         flash("post_message", "Your event was created");
                         redirect("/events/upcoming");
                         return;
                     }
                 } catch (PDOException $e) {
                     flash("post_message", "Your event could not be created. Try again later", "alert alert-danger");

                 }
             }
         }
         $this->view("events/add", $data);
     }
     public function edit() {
         $event = $this->eventsModel->getAllEvents();
         if($event->user_id != $_SESSION["user_id"]) {
             redirect("/events");
             return;
         }
         $data = [
             "title" => "Edit event",
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
             $data["event_date"] = sanitize($_POST["event_date"]);
             $data["event_address"] = sanitize($_POST["event_address"]);
             if(empty($data["event_title"])) {
                 $data["event_title_error"] = "Title is required";
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
             if(empty($data["event_title_error"]) && empty($data["event_description_error"]) && empty($data["event_date_error"])  && empty($data["event_address_error"])) {
                 try {
                     if ($this->eventsModel->updateEvents($data)) {
                         // data successfully added
                         flash("post_message", "Your event was updated");
                         redirect("/events");
                         return;
                     }
                     // ??
                 } catch (PDOException $e) {
                     flash("post_message", "Your event could not be updated. Try again later.", "alert alert-danger");
                 }
             }
         }
         $this->view("events/edit", $data);
     }
     public function delete($id) {
         $event = $this->eventsModel->getsingleEvent($id);
         if($event->user_id != $_SESSION["user_id"]) {
             redirect("/events");
             return;
         }
         try {
             if ($this->eventsModel->deleteEvent($id)) {
                 flash("post_message", "Your event was deleted");
                 redirect("/events");
             }
         } catch(PDOException $e) {
             flash("post_message", "Your event could not be deleted. Try again later.", "alert alert-danger");
             $this->view($id);
         }
     }
 }