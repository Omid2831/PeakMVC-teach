<?php

class RijksteZangeresModel
{
        private $db;

    public function __construct()
    {
        $this->db = new Database();
        
    }

    public function getAllZangaressen()
    {
        $query = "SELECT ZANGR.Naam
                         ,ZANGR.Nettowaarde
                         ,ZANGR.Land
                         ,ZANGR.Mobiel
                         ,ZANGR.Leeftijd
                         FROM Zangeres As ZANGR
                         ORDER BY ZANGR.Nettowaarde DESC, ZANGR.Mobiel DESC";

        $this->db->query($query);

        return $this->db->resultSet();

    }
}