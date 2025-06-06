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

    public function delete($id) {
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
}
