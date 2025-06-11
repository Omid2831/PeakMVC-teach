<?php

class Sneakers extends BaseController{
    private $sneakersModel;
    public function __construct(){
        $this->sneakersModel = $this->model("SneakersModel");
    }
    public function index(){

        
        $result = $this->sneakersModel->getAllSneakers();
        
        $data = [
            'title' => 'Sneakers',
            'description' => 'This is the sneakers page',
            'Sneakers' => $result
        ];
        $this->view('Sneakers/index', $data);
    }
    public function delete($id)
    {
        $this->sneakersModel->delete($id);

        // Fetch updated list of sneakers
        $result = $this->sneakersModel->getAllSneakers();
        $data = [
            'title' => 'Sneakers',
            'description' => 'This is the Sneakers page',
            'Sneakers' => $result
        ];

        // Redirect to the index page
        header('Refresh:3; url=' . URLROOT . '/Sneakers/index');

        // Render the view
        $this->view('Sneakers/index', $data);
    }
     public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'Merk' => trim($_POST['merk']),
                'Model' => trim($_POST['model']),
                'Type' => trim($_POST['type']),
                'Prijs' => trim($_POST['prijs']),
            ];

            if ($this->sneakersModel->create($data)) {
                // Redirect or show success
                header("Location: " . URLROOT . "/Sneakers/index");
                exit;
            } else {
                $data['message'] = 'Er is een fout opgetreden bij het toevoegen van het record'; // Error message
                $this->view('Sneakers/create', $data);
            }
        } else {
            $data = [
                'title' => 'Sneakers',
                'description' => 'This is the Sneakers page',
                'message' => '' // Default empty message
            ];
            $this->view('Sneakers/create', $data);
        }
    }
}