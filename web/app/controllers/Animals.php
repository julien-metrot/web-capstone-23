<?php
/*require_once '../helpers/session_helpers.php';*/
class Animals extends Controller
{
    public function __construct()
    {
        $this->animalsModel = $this->model("Animalsmodel");
        $this->eventsModel = $this->model("Eventsmodel");
    }

    public function all()
    {
        $animals = $this->animalsModel->getAllAnimals();
        $data = [
            "title" => "Animals",
            "animals" => $animals,
        ];
        $this->view("animals/all", $data);
    }

/*    public function single($id)
    {
        $animals = $this->animalsModel->getAnimal($id);
        $events = $this->eventsModel->getAllEvents();
        $data = [
            "title" => "Animals | More Info",
            "animals" => $animals,
            "events" => $events
        ];
        $this->view("animals/single", $data);
    }*/

    public function add()
    {
        $data = [
            "title" => "Add New Animal",
            "name" => "",
            "breed" => "",
            "type" => "",
            "gender" => "",
            "dateofbirth" => "",
            "status" => "",
            "description" => "",
            "special_needs" => "",
            "friendly" => ""

        ];
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $data["name"] = ($_POST["name"]);
            $data["breed"] = ($_POST["breed"]);
            $data["type"] = ($_POST["type"]);
            $data["gender"] = ($_POST["gender"]);
            $data["dateofbirth"] = ($_POST["dateofbirth"]);
            $data["status"] = ($_POST["status"]);
            $data["description"] = ($_POST["description"]);
            $data["special_needs"] = ($_POST["special_needs"]);
            $data["friendly"] = ($_POST["friendly"]);
            if (empty($data["name"])) {
                $data["name_error"] = "A name is required";
            }
            if (empty($data["breed"])) {
                $data["breed_error"] = "A breed is required";
            }
            if (empty($data["type"])) {
                $data["type_error"] = "A type is required";
            }
            if (empty($data["gender"])) {
                $data["gender_error"] = "A gender is required";
            }
            if (empty($data["dateofbirth"])) {
                $data["dateofbirth_error"] = "A birthday is required";
            }
            if (empty($data["status"])) {
                $data["status_error"] = "A status is required";
            }
            if (empty($data["description"])) {
                $data["description_error"] = "A description is required";
            }
            if (empty($data["special_needs"])) {
                $data["special_needs_error"] = "Does this animal have special needs?";
            }
            if (empty($data["friendly"])) {
                $data["friendly_error"] = "Is this animal friendly to other animals?";
            }
            if (empty($data["name_error"]) && empty($data["breed_error"]) && empty($data["type_error"]) && empty($data["gender_error"])
                && empty($data["dateofbirth_error"]) && empty($data["status_error"]) && empty($data["description_error"]) && empty($data["special_needs_error"]) && empty($data["friendly_error"])) {
                try {
                    if ($this->animalsModel->addAnimal($data)) {
                        // data successfully added
                        flash("animal_message", "Your animal was created");
                        redirect("/animals/all");
                        return;
                    }
                } catch (PDOException $e) {
                    flash("animal_message", "Your animal could not be added. Try again later", "alert alert-danger");

                }
            }
        }
        $this->view("animals/add", $data);
    }

}