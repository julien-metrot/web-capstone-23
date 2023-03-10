<?php
class Adopt extends Controller {
    public function __construct(){
        $this->adoptModel = $this->model("Adoptmodel");
    }

    public function applications(){
        $applications = $this->adoptModel->getAllApplications();
        $data = [
            "title" => "All Applications",
            "applications" => $applications
        ];
        $this->view("adopt/applications", $data);
    }
}
