<?php
 class Events extends Controller {
     public function __construct() {
         if(!isLoggedIn()) {
             redirect("/user/login");
         }
         $this->eventsModel = $this->model("Eventsmodel");
     }
     public function upcoming() {
         $events = $this->eventsModel->getAllEvents();

         $data = [
             "title" => "Upcoming events",
             "events" => $events,
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
         if(!isLoggedIn()) {
             redirect("/user/login");
         }
         $data = [
             "title" => "Add New Event",
             "event_title" => "",
             "event_description" => "",
             "location_name" => "",
             "location_address" => "",
             "event_date" => "",
             "event_title_error" => "",
             "event_description_error" => "",
             "location_name_error" => "",
             "location_address_error" => "",
             "event_date_error" => "",
         ];

         if ($_SERVER["REQUEST_METHOD"] == "POST") {
             $data["event_title"] = sanitize($_POST["event_title"]);
             $data["event_description"] = sanitize($_POST["event_description"]);
             $data["location_name"] = sanitize($_POST["location_name"]);
             $data["location_address"] = sanitize($_POST["location_address"]);
             $data["event_date"] = sanitize($_POST["event_date"]);
             if (empty($data["event_title"])) {
                 $data["event_title_error"] = " Event Title is required";
             }
             if (empty($data["event_description"])) {
                 $data["event_description_error"] = "Description is required";
             }
             if (empty($data["location_name"])) {
                 $data["location_name_error"] = "Location name is required";
             }

             if (empty($data["location_address"])) {
                 $data["location_address_error"] = "Location address is required";
             }

             if (empty($data["event_date"])) {
                 $data["event_date_error"] = "Date is required";
             }
             if (empty($data["event_title_error"]) && empty($data["event_description_error"]) && empty($data["location_name_error"]) && empty($data["location_address_error"]) && empty($data["event_date_error"])) {
                 try {
                     if ($this->eventsModel->addEvent($data)) {
                         // data successfully added
                         flash("post_message", "Your event was created");
                         redirect("/events/upcoming");
                         return;
                     }
                 } catch (PDOException $e) {
                     flash("post_message", "Your event could not be created. Try again later.", "alert alert-danger");

                 }
             }
         }
         $this->view("events/add", $data);
     }


     public function edit($id) {
         $event = $this->eventsModel->getEventById($id);
//         echo "<pre>". print_r($event, 1) . "</pre>";
//         die();
         if(!isLoggedIn()) {
             redirect("/user/login");
         }
         $data = [
             "title" => "Edit event",
             "event_id" => $event->event_id,
             "event_title" => $event->title,
             "event_description" => $event->description,
             "location_name" => $event->name,
             "location_address" => $event->address,
             "event_date" => $event->date,
             "event_title_error" => "",
             "event_description_error" => "",
             "location_name_error" => "",
             "location_address_error" => "",
             "event_date_error" => "",
         ];

         if($_SERVER["REQUEST_METHOD"] == "POST") {
             $data["event_title"] = sanitize($_POST["event_title"]);
             $data["event_description"] = sanitize($_POST["event_description"]);
             $data["location_name"] = sanitize($_POST["location_name"]);
             $data["location_address"] = sanitize($_POST["location_address"]);
             $data["event_date"] = sanitize($_POST["event_date"]);
             if(empty($data["event_title"])) {
                 $data["event_title_error"] = "Title is required";
             }
             if(empty($data["event_description"])) {
                 $data["event_description_error"] = "Description is required";
             }
             if (empty($data["location_name"])) {
                 $data["location_name_error"] = "Location name is required";
             }

             if (empty($data["location_address"])) {
                 $data["location_address_error"] = "Location address is required";
             }

             if(empty($data["event_date"])) {
                 $data["event_date_error"] = "Date is required";
             }
             if(empty($data["event_title_error"]) && empty($data["event_description_error"]) && empty($data["location_name_error"]) && empty($data["location_address_error"]) && empty($data["event_date_error"])) {
                 try {
                     if ($this->eventsModel->updateEvent($data)) {
                         // data successfully added
                         flash("post_message", "Your event was updated");
                         redirect("/events/upcoming");
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
         $this->eventsModel->getEventById($id);
         if(!isLoggedIn()) {
             redirect("/user/login");
         }


         try {
             if ($this->eventsModel->deleteEvent($id)) {
                 flash("post_message", "Your event was deleted");
                 redirect("/events/upcoming");
             }

         } catch(PDOException $e) {
             flash("post_message", "Your event could not be deleted. Try again later.", "alert alert-danger");
             $this->view($id);
         }
     }
 }