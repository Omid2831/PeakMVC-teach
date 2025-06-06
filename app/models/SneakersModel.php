<?php

class SneakersModel
{
        private $db;

    public function __construct()
    {
        $this->db = new Database();
        
    }

    public function getAllSneakers()
     {
          $this->db->query("SELECT
                                      SN.Merk
                                     ,SN.Model
                                     ,SN.Type
                                     FROM Sneakers As SN
                                     ORDER BY SN.Merk DESC;"
                         );
          return $this->db->resultSet();
     }
}