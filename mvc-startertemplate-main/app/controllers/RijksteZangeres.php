<?php

class RijksteZangeres extends BaseController{
    private $zangeresModel;
    public function __construct(){
        $this->zangeresModel = $this->model("RijksteZangeresModel");
    }
    public function index(){

        
        $result = $this->zangeresModel->getAllZangaressen();
        
        $data = [
            'title' => 'RijksteZangeres',
            'description' => 'TOP 5 RIJKSTE ZANGERESSEN TER WERELD',
            'Horloges' => $result
        ];
        $this->view('RijksteZangeres/index', $data);
    }
   
}