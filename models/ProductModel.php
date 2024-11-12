<?php

namespace app\models;

use app\core\BaseModel;
use app\core\DbConnection;

class ProductModel extends BaseModel
{
    public int $id;
    public string $name;
    public string $description;
    public int $price;

    public function tableName()
    {
        // TODO: Implement tableName() method.
        return 'products';
    }

    public function readColumns()
    {
        // TODO: Implement readColumns() method.
        return["id", "name" , "description"];
    }

    public function editColumns()
    {
        // TODO: Implement editColumns() method.
        return["name" , "description"];
    }
}