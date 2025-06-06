<?php

class SmartPhones extends BaseController
{
    private $smartphonesModel;
    public function __construct()
    {
        $this->smartphonesModel = $this->model("SmartphonesModel");
    }
    public function index()
    {
        
        $result = $this->smartphonesModel->getAllSmartphones();
        
        $data = [
            'title' => 'Smartphones',
            'description' => 'This is the smartphones page',
            'smartphones' => $result
        ];
        $this->view('Smartphones/index', $data);
    }

}