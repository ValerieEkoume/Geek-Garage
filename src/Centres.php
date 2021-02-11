<?php
Namespace App;
use PDO;



Class Centres
{
    // Connexion
    protected $Connexion;
    protected $table="centres";

    // Object properties
    public $id;
    public $nom_centre;
    public $adresse;
    public $tel;
    public $latitude;
    public $longitude;
    public $created;

    /**
     * Constructeur avec $pdo pour la connexion à la bdd
     * @param $pdo
     */
    public function __construct(Connection $pdo)
    {
        $this->pdo=$pdo;
    }


    /**
     * Lecture des agences
     * @return void
     */

    public function lire()
    {
        // Écrire la requête
        $sql="SELECT * FROM" . $this->table;

        //préparation de la requête
        $query=$this->connexion->prepare($sql);

        //on execute la requête
        $query->execute();

        // On retourne le résultat
        return $query;
    }

}