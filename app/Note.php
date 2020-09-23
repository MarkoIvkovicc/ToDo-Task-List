<?php

namespace App;

use App\Db\QueryBuilder;
use App\Db\Connection;

/**
 * @author     Marko Ivković <markoivkovic16@gmail.com>
 */
class Note
{
    public $id;
    public $user_id;
    public $task_id;
    public $text;
    public $created_at;

    protected $comment = [];
    protected $connection;
    protected $queryBuilder;

    public function __construct()
    {
        $this->conn = new Connection;
        $this->connection = $this->conn->connect();
        $this->queryBuilder = new QueryBuilder;
    }

    public function create($noteData)
    {
        $this->queryBuilder->createNote($noteData);
    }

    public function show($noteId)
    {
        if ($note = $this->queryBuilder->getNote($noteId)) {
            foreach ($note as $attribute) {
                $this->id = $attribute['id'];
                $this->user_id = $attribute['user_id'];
                $this->task_id = $attribute['task_id'];
                $this->text = $attribute['text'];
                $this->created_at = $attribute['created_at'];
            }
            return $this;
        }
    }
    
    public function update(array $params)
    {
        return $this->queryBuilder->updateNote($params);
    }

    public function delete($noteId)
    {
        return $this->queryBuilder->deleteNote($noteId);
    }

    public function noteById($id) {
        return $this->queryBuilder->getNote($id);
    }

    public function notesByTask($taskId)
    {
        return $this->queryBuilder->getNotesByTask($taskId);
    }
}
