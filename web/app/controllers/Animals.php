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

    public function single($id) {
        $animals = $this->animalsModel->getAnimal($id);
        $events = $this->eventsModel->getAllEvents();
        if (isset($animals) && is_object($animals)) {
            $data = [
                "title" => "Animals | More Info",
                "animals" => $animals,
                "events" => $events,
                "animal_id" => $id
            ];
            $this->view("animals/single", $data);
        } else {
            echo "Error: Unable to retrieve animal information.";
        }
    }

    public function add()
    {
        if ($_SESSION["user_admin"] || !isLoggedIn()) {
            redirect("/animals/all");
            return;
        }
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
            if (empty($data["friendly"])) {
                $data["friendly_error"] = "Is this animal friendly to other animals?";
            }
            if (empty($data["name_error"]) && empty($data["breed_error"]) && empty($data["type_error"]) && empty($data["gender_error"])
                && empty($data["dateofbirth_error"]) && empty($data["status_error"]) && empty($data["description_error"]) && empty($data["friendly_error"])) {
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

    public function edit($animal_id) {
        if ($_SESSION["user_admin"] || !isLoggedIn()) {
            redirect("/animals/all");
            return;
        }
        $animal = $this->animalsModel->getAnimal($animal_id);
        $data = [
            "title" => "Edit Animal",
            "animal_id" => $animal->animal_id,
            "name" => $animal->name,
            "breed" => $animal->breed,
            "type" => $animal->type,
            "gender" => $animal->gender,
            "dateofbirth" => $animal->dateofbirth,
            "description" => $animal->description,
            "status" => $animal->status,
            "special_needs" => $animal->special_needs,
            "friendly" => $animal->friendly,
            "name_error" => "",
            "breed_error" => "",
            "type_error" => "",
            "gender_error" => "",
            "dateofbirth_error" => "",
            "description_error" => "",
            "status_error" => "",
            "special_needs_error" => "",
            "friendly_error" => "",
        ];
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $data["name"] = sanitize($_POST["name"]);
            $data["breed"] = sanitize($_POST["breed"]);
            $data["type"] = sanitize($_POST["type"]);
            $data["gender"] = sanitize($_POST["gender"]);
            $data["dateofbirth"] = sanitize($_POST["dateofbirth"]);
            $data["status"] = sanitize($_POST["status"]);
            $data["description"] = sanitize($_POST["description"]);
            $data["special_needs"] = sanitize($_POST["special_needs"]);
            $data["friendly"] = sanitize($_POST["friendly"]);
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
                $data["special_needs"] = null;
            } else {
                $data["special_needs"] = sanitize($_POST["special_needs"]);
            }
            if (empty($data["friendly"])) {
                $data["friendly_error"] = "Is this animal friendly to other animals?";
            }
            if (empty($data["name_error"]) && empty($data["breed_error"]) && empty($data["type_error"]) && empty($data["gender_error"])
                && empty($data["dateofbirth_error"]) && empty($data["status_error"]) && empty($data["description_error"]) && empty($data["friendly_error"])) {
                try {
                    if ($this->animalsModel->updateAnimal($data)) {
                        // data successfully updated
                        flash("update_message", "Your edit was successful");
                        redirect("/animals/all");
                        return;
                    }
                } catch (PDOException $e) {
                    flash("update_message", "Your edit was unsuccessful. Try again later", "alert alert-danger");

                }
            }
        }
        $this->view("animals/edit", $data);
    }

    public function delete($id) {
        if ($_SESSION["user_admin"] || !isLoggedIn()) {
            redirect("/animals/all");
            return;
        }
        $animals = $this->animalsModel->getAnimal($id);
        try {
            if($this->animalsModel->deleteAnimal($id)) {
                flash("delete_message", "This animal has been deleted");
                redirect("/animals/all");
            }
        } catch(PDOException $e) {
            flash("delete_message", "This animal could not be deleted. Try again later.", "alert alert-danger");
            $this->show($id);
        }
    }
}