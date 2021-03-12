<?php
namespace App\Model;

use Core\Model\Model;

/**
 * @method ReadAll() | Récupère tous les catégories
 * @method ReadOne(int $id) | Retourne une catégorie en fonction de son id
 * @method delete(int $id) | Supprime une catégorie en fonction de son id
 * @method create($data) | Enregistre une catégorie dans la BDD
 */
class OrdersModel extends Model{

    /**
     * Nom de la table
     *
     * @var string
     */
    protected $table = "orders";

    public function countOrders()
    {
        $statement = "SELECT COUNT(*) AS count FROM orders";
        return $this->db->getData($statement,true);
    }
    public function countOrdersSh()
    {
        $statement = "SELECT COUNT(*) AS count FROM orders WHERE status = 'Shipped'";
        return $this->db->getData($statement,true);
    }
    public function countOrdersCan()
    {
        $statement = "SELECT COUNT(*) AS count FROM orders WHERE status = 'Cancelled'";
        return $this->db->getData($statement,true);
    }


}
