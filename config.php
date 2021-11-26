<?php 
        
class Database
{
    private $bdd;

    public function __construct()
    {
      try 
      {
        $this->bdd = new PDO("mysql:host=mysql-amine.alwaysdata.net;dbname=amine_quizz;port=3306", "amine", "moamine01");
     } catch(PDOException $e)
      {
        die('Erreur : '.$e->getMessage());
      }

}
public function getBdd()
    {
        return $this->bdd;
    }


    

  }