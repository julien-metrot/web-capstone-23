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

    public function application_single(){
        $applications = $this->adoptModel->getApplicantInfo();
        $data = [
            "title" => "Single Application",
            "applications" => $applications
        ];
        $this->view("adopt/application_single", $data);
    }

    public function showPending(){
        $applications = $this->adoptModel->getAllPending();
        $data = [
            "title" => "Pending Applications",
            "applications" => $applications
        ];
        $this->view("adopt/applications", $data);
    }

    public function showApproved(){
        $applications = $this->adoptModel->getAllApproved();
        $data = [
            "title" => "Approved Applications",
            "applications" => $applications
        ];
        $this->view("adopt/applications", $data);
    }

    public function showDenied(){
        $applications = $this->adoptModel->getAllDenied();
        $data = [
            "title" => "Denied Applications",
            "applications" => $applications
        ];
        $this->view("adopt/applications", $data);
    }
}
