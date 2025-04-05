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

    public function delete($Id)
    {
        if ($this->smartphonesModel->delete($Id)) {
            header('location: ' . URLROOT . '/SmartPhones/index');
        } else {
            die('Something went wrong');
        }
    }
}