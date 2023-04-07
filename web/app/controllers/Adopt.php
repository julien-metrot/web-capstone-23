<?php

class Adopt extends Controller
{
    public function __construct()
    {
        $this->adoptModel = $this->model("Adoptmodel");
    }

    public function applications()
    {
        $applications = $this->adoptModel->getAllApplications();
        $data = [
            "title" => "All Applications",
            "applications" => $applications
        ];
        $this->view("adopt/applications", $data);
    }

    public function application_single()
    {
        $applications = $this->adoptModel->getApplicantInfo();
        $data = [
            "title" => "Single Application",
            "applications" => $applications
        ];
        $this->view("adopt/application_single", $data);
    }

    public function showPending()
    {
        $applications = $this->adoptModel->getAllPending();
        $data = [
            "title" => "Pending Applications",
            "applications" => $applications
        ];
        $this->view("adopt/applications", $data);
    }

    public function showApproved()
    {
        $applications = $this->adoptModel->getAllApproved();
        $data = [
            "title" => "Approved Applications",
            "applications" => $applications
        ];
        $this->view("adopt/applications", $data);
    }

    public function showDenied()
    {
        $applications = $this->adoptModel->getAllDenied();
        $data = [
            "title" => "Denied Applications",
            "applications" => $applications
        ];
        $this->view("adopt/applications", $data);
    }

    public function apply()
    {
        $data = [
            "title" => "Apply for Adoption",
            // Include default values for form inputs
            "fullName" => "",
            "email" => "",
            "currentPets" => "",
            "hasChildren" => "",
            "employerName" => "",
            "homeStatus" => "",
            "landlordName" => "",
            "landlordPhone" => "",
            "referenceName" => "",
            "referencePhone" => "",
            "referenceRelationship" => "",
        ];
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // The user submitted the application form

            // Get and validate first name
            $data["fullName"] = $_POST["fullName"];
            if ($data["fullName"] == "") {
                $data["fullName_error"] = "Your name is required";
            }


            // Get and validate email
            $data["email"] = $_POST["email"];
            if (!filter_var($data["email"], FILTER_VALIDATE_EMAIL)) {
                $data["email_error"] = "Invalid email address format";
            }

            // Get and validate currentPets checkbox
//            $data["currentPets"] = $_POST["currentPets"];
//            if ($data["currentPets"] = "") {
//                $data["currentPets_error"] = "Must select an option";
//            }

            // Get and validate hasChildren checkbox
//            $data["hasChildren"] = $_POST["hasChildren"];
//            if ($data["hasChildren"] = "") {
//                $data["hasChildren_error"] = "Must select an option";
//            }

            // Get and validate employer name
            $data["employerName"] = $_POST["employerName"];
            // not requiring employer

            // Get and validate homeStatus checkbox
//            $data["homeStatus"] = $_POST["homeStatus"];
//            if ($data["homeStatus"] = "") {
//                $data["homeStatus_error"] = "Must select a home status option";
//            } else if ($data["homeStatus"] = "Rent") {
//                // Get and validate landlord name
//                $data["landlordName"] = $_POST["landlordName"];
//                if ($data["landlordName"] = "") {
//                    $data["landlordName_error"] = "Must enter a landlord";
//                }
//                // Get and validate landlord name
//                $data["landlordPhone"] = $_POST["landlordPhone"];
//                if (!filter_var($data["landlordPhone"], FILTER_SANITIZE_NUMBER_INT)) {
//                    $data["landlordPhone_error"] = "Must enter a landlord phone number";
//                }
//            }

            // Get and validate referenceName checkbox
            $data["referenceName"] = $_POST["referenceName"];
            if ($data["referenceName"] = "") {
                $data["referenceName_error"] = "Must select add one reference";
            }

            // Get and validate referencePhone checkbox
            $data["referencePhone"] = $_POST["referencePhone"];
            if (!filter_var($data["referencePhone"], FILTER_SANITIZE_NUMBER_INT)) {
                $data["referencePhone_error"] = "Must enter a reference phone number";
            }


            if (empty($data["fullName_error"]) && empty($data["email_error"]) && empty($data["currentPets_error"]) && empty($data["hasChildren_error"]) && empty($data["landlordName_error"]) && empty($data["landlordPhone_error"]) && empty($data["landlordPhone_error"])) {
                if ($this->userModel->apply($data)) {
                    // Will run if the application is added to the database
                    flash("application_success", "Thank you for submitting your application! We will be in touch shortly");
                    header("location: " . URLROOT . "/user/login");
                } else {
                    // Will run if the user is NOT added to the database
                }
            }

        }
        $this->view("adopt/apply", $data);
    }
}
