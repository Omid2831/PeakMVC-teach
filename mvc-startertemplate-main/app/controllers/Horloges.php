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
    public function delete($Id)
    {
        $this->horlogesModel->delete($Id);
        header('Location: '. URLROOT . '/Horloges/index');
    }
}