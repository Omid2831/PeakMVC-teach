<?php

class VulkanenModel
{
        private $db;

    public function __construct()
    {
        $this->db = new Database();
        
    }

    public function getAllVulkanen()
    {
        $query = "SELECT 
                          VLK.Id
                         ,VLK.Naam
                         ,VLK.Hoogte
                         ,VLK.Land
                         ,VLK.JaarLaatsteUitbarsting
                         ,VLK.AantalSlachtoffers
                         FROM Vulkaan As VLK
                         ORDER BY VLK.Naam DESC";

        $this->db->query($query);

        return $this->db->resultSet();

    }
}