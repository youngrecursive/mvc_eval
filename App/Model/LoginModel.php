<?php
namespace App\Model;

use Core\Model\Model;

/**
 * @method ReadAll() | Récupère tous les catégories
 * @method ReadOne(int $id) | Retourne une catégorie en fonction de son id
 * @method delete(int $id) | Supprime une catégorie en fonction de son id
 * @method create($data) | Enregistre une catégorie dans la BDD
 */
class LoginModel extends Model{

    /**
     * Nom de la table
     *
     * @var string
     */
    protected $table = "user";

    public function SelectLogin()
    {
        $statement = "SELECT * FROM user";

        return $this->db->getData($statement,true);
    }

    public function InsertLogin($l,$p)
    {
        $statement = "INSERT INTO user (email,password) VALUES ($l,$p) WHERE id = 2";

        return $this->db->getData($statement,true);
    }

    public function getUserByEmail(string $email):object
    {
        $statement = "SELECT * FROM user WHERE email = '$email'";
        return $this->db->getData($statement, true);
    }


}
