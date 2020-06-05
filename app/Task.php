<?php

namespace App;

use App\Db\QueryBuilder;
use App\Db\Connection;

class Task
{
    public $id;
    public $title;
    public $body;
    public $user_id;
    public $created_at;
    public $completed;

    protected $task = [];
    protected $indexTask = [];
    protected $connection;

    public function __construct()
    {
        $this->conn = new Connection;
        $this->connection = $this->conn->connect();
        $this->queryBuilder = new QueryBuilder;
    }

    public function create($taskData)
    {
        $this->queryBuilder->createTask($taskData);
    }

    public function delete($taskId)
    {
        $this->queryBuilder->deleteTask($taskId);
    }

    public function show($taskId)
    {
        if ($task = $this->queryBuilder->getTask($taskId)) {
            foreach ($task as $attribute) {
                $this->id = $attribute['id'];
                $this->title = $attribute['title'];
                $this->description = $attribute['description'];
                $this->user_id = $attribute['user_id'];
                $this->created_at = $attribute['created_at'];
                $this->completed = $attribute['completed'];
            }
            return $this;
        }
    }
    
    public function index()
    {
        return $this->queryBuilder->indexTask();
    }

    public function taskById($id)
    {
        return $this->queryBuilder->getTaskById($id);
    }

    public function update(array $params)
    {
        return $this->queryBuilder->updateTask($params);
    }

    public function completeTask($id)
    {
        return $this->queryBuilder->completeTask($id);
    }

    public function inCompleteTask($id)
    {
        return $this->queryBuilder->inCompleteTask($id);
    }
}
