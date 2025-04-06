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
                                      SN.Id
                                     ,SN.Merk
                                     ,SN.Model
                                     ,SN.Type
                                     FROM Sneakers As SN
                                     ORDER BY SN.Merk DESC;"
                         );
          return $this->db->resultSet();
     }
     public function delete($Id){
            $sql = "DELETE 
            FROM Sneakers WHERE Id = :Id";
            $this->db->query($sql);
            $this->db->bind(':Id', $Id);
            return $this->db->execute();    
     }
}