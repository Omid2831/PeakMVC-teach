<?php

class Horloges extends BaseController{
    private $horlogesModel;
    public function __construct(){
        $this->horlogesModel = $this->model("HorlogesModel");
    }
    public function index(){

        
        $result = $this->horlogesModel->getAllHorloges();
        
        $data = [
            'title' => 'Horloges',
            'description' => 'This is the Horloges page',
            'Horloges' => $result
        ];
        $this->view('Horloges/index', $data);
    }
    // public function delete($id)
    // {
    //         // Ensure the ID is valid
    //         if (!is_numeric($id) || !ctype_digit($id)) {
    //             // Handle invalid ID
    //             die('Invalid ID');
    //         }
    
    //         // Load the model
    //         $this->horlogesModel = $this->model('HorlogeModel');
    
    //         // Attempt to delete the record
    //         if ($this->horlogesModel->deleteHorlogeById($id)) {
    //             // Redirect to the index page with a success message
    //             header('Location: ' . URLROOT . '/Horloges/index');
    //         } else {
    //             // Handle the error
    //             die('Something went wrong');
    //         }
    //     }
}