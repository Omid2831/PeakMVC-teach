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

    public function delete($Id){
        if($this->sneakersModel->delete($Id)){
            header('location: ' . URLROOT . '/Sneakers/index');
        }else{
            die('Something went wrong');
        }
    }
}