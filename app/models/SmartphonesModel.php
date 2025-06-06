<?php

class SmartphonesModel
{
        private $db;

    public function __construct()
    {
        $this->db = new Database();
        
    }

    public function getAllSmartphones()
    {
        $query = "SELECT SMPS.Merk
                         ,SMPS.Model
                         ,SMPS.Prijs
                         ,SMPS.Geheugen
                         ,SMPS.Besturingssysteem
                         ,CONCAT(SMPS.Schermgrootte , ' Inch') AS Schermgrootte
                         ,DATE_FORMAT(SMPS.ReleaseDate, '%d/%m/%Y') AS ReleaseDate
                         ,CONCAT(SMPS.MegaPixels, ' MP') AS MegaPixels
                         FROM Smartphones As SMPS
                         ORDER BY SMPS.Merk DESC, SMPS.Geheugen DESC, SMPS.Schermgrootte DESC,SMPS.ReleaseDate DESC, SMPS.MegaPixels DESC";

        $this->db->query($query);

        return $this->db->resultSet();

    }
}