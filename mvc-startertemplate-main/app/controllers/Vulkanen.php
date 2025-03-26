<?php

class Vulkanen extends BaseController{
    private $vulkanenModel;
    public function __construct(){
        $this->vulkanenModel = $this->model("VulkanenModel");
    }
    public function index(){

        
        $result = $this->vulkanenModel->getAllVulkanen();
        
        $data = [
    'title' => 'vulkanen overview',
    'description' => 'TOP 5 RIJKSTE ACTIEFSTE VULKANEN TER WERELD',
    'Zangeres' => $result
];
        $this->view('Vulkanen/index', $data);
    }
   
}