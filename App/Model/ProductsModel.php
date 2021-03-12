<?php
namespace App\Model;

use Core\Model\Model;

/**
 * @method ReadAll() | Récupère tous les catégories
 * @method ReadOne(int $id) | Retourne une catégorie en fonction de son id
 * @method delete(int $id) | Supprime une catégorie en fonction de son id
 * @method create($data) | Enregistre une catégorie dans la BDD
 */
class ProductsModel extends Model{

    /**
     * Nom de la table
     *
     * @var string
     */
    protected $table = "products";

    public function countProducts()
    {
        $statement = "SELECT COUNT(*) AS count FROM products";
        return $this->db->getData($statement,true);
    }


}
