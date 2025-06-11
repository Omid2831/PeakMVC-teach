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
                                     ,SN.Prijs
                                     FROM Sneakers As SN
                                     ORDER BY SN.Merk DESC;"
                         );
          return $this->db->resultSet();
     }
      public function delete($id)
    {

        $query = "DELETE FROM Sneakers WHERE Id = :Id";

        $this->db->query($query);
        $this->db->bind(':Id', $id);

        return $this->db->execute();
    }
    public function create($data)
    {

         $sql = "INSERT INTO Sneakers (
                Merk,
                Model,
                Type,
                Prijs
            ) VALUES (
                :Merk,
                :Model,
                :Type,
                :Prijs
            )";

    $this->db->query($sql);


    $this->db->bind(':Merk', $data['Merk']);
    $this->db->bind(':Model', $data['Model']);
    $this->db->bind(':Type', $data['Type']);
    $this->db->bind(':Prijs', $data['Prijs']);

    return $this->db->execute();
    }
}