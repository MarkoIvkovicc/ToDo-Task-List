<?php

namespace App;

use App\Db\Connection;
use App\Db\QueryBuilder;

/**
 * @author     Marko Ivković <markoivkovic16@gmail.com>
 * @author     Živko Obradović <zozobradovic@gmail.com>
 */
class User
{
    public $id;
    public $name;
    public $email;
    public $role;
    public $created_at;

    protected $user = [];
    protected $indexUser = [];
    protected $connection;
    protected $queryBuilder;


    public function __construct()
    {
        $this->conn = new Connection;
        $this->connection = $this->conn->connect();
        $this->queryBuilder = new QueryBuilder;
    }

    public function create($userData)
    {
        $this->queryBuilder->createUser($userData);
    }

    public function delete($userId)
    {
        $this->queryBuilder->deleteUser($userId);
    }

    public function show($userId)
    {
        if ($user = $this->queryBuilder->getUser($userId)) {
            foreach ($user as $attribute) {
                $this->id = $attribute['id'];
                $this->name = $attribute['name'];
                $this->email = $attribute['email'];
                $this->role = $attribute['role'];
                $this->created_at = $attribute['created_at'];
            }
            return $this;
        }
    }

    public function index()
    {
        return $this->queryBuilder->indexUser();
    }

    public function tasks($userId)
    {
        return $this->queryBuilder->userTasks($userId);
    }

    public function find(array $params)
    {
        return $this->queryBuilder->loginUser(
            $params['emailname'], $params['password']
        );
    }

    public function developers()
    {
        return $this->queryBuilder->developerUsers();
    }

    public function pendingUsers()
    {
        return $this->queryBuilder->newPendingUsers();
    }

    public function userById($id)
    {
        return $this->queryBuilder->getUserById($id);
    }

    public function update(array $params)
    {
        return $this->queryBuilder->updateUser($params);
    }
}
