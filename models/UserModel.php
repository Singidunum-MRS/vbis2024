<?php

namespace app\models;

use app\core\BaseModel;
use app\core\DbConnection;

class UserModel extends BaseModel
{
    public int $user_id;

    public string $email;
    public string $first_name;
    public string $last_name;

    public function __construct()
    {

    }

    public function tableName()
    {
        // TODO: Implement tableName() method.
        return 'users';
    }

    public function readColumns()
    {
        // TODO: Implement readColumns() method.
        return ["user_id", "first_name", "last_name", "email"];
    }

    public function editColumns()
    {
        // TODO: Implement editColumns() method.
        return ["first_name", "last_name", "email"];
    }
}