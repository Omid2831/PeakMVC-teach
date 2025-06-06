<?php

class Horloges extends BaseController
{
    private $horlogesModel;
    public function __construct()
    {
        $this->horlogesModel = $this->model("HorlogesModel");
    }
    public function index()
    {
        $result = $this->horlogesModel->getAllHorloges();
        $data = [
            'title' => 'Horloges',
            'description' => 'This is the Horloges page',
            'Horloges' => $result
        ];
        $this->view('Horloges/index', $data);
    }

    public function delete($id)
    {
        $this->horlogesModel->delete($id);

        // Fetch updated list of horloges
        $result = $this->horlogesModel->getAllHorloges();
        $data = [
            'title' => 'Horloges',
            'description' => 'This is the Horloges page',
            'Horloges' => $result
        ];

        // Redirect to the index page
        header('Refresh:3; url=' . URLROOT . '/Horloges/index');

        // Render the view
        $this->view('Horloges/index', $data);
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'Merk' => trim($_POST['merk']),
                'Model' => trim($_POST['model']),
                'Prijs' => trim($_POST['prijs']),
            ];

            if ($this->horlogesModel->create($data)) {
                // Redirect or show success
                header("Location: " . URLROOT . "/Horloges/index");
                exit;
            } else {
                $data['message'] = 'Er is een fout opgetreden bij het toevoegen van het record'; // Error message
                $this->view('Horloges/create', $data);
            }
        } else {
            $data = [
                'title' => 'Horloges',
                'description' => 'This is the Horloges page',
                'message' => '' // Default empty message
            ];
            $this->view('Horloges/create', $data);
        }
    }
}
