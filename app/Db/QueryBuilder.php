<?php

namespace App\Db;

use App\User;
use App\Db\Connection;
use PDO;

/**
 * @author     Marko Ivković <markoivkovic16@gmail.com>
 * @author     Živko Obradović <zozobradovic@gmail.com>
 */
class QueryBuilder
{
    protected $connection;

    public function __construct()
    {
        $this->conn = new Connection;
        $this->connection = $this->conn->connect();
    }

    public function loginUser(string $emailname, string $password)
    {
        $sql = sprintf(
            "SELECT id, role, name FROM users WHERE (email='%s' OR name='%s') AND password='%s'",
            $emailname,
            $emailname,
            $password
        );

        $stat = $this->connection->query($sql);
        return $stat->fetchAll(PDO::FETCH_CLASS, 'App\User');
    }

    public function getUserById($id)
    {
        $sql = sprintf(
            "SELECT id, name, email, role FROM users WHERE id='%s'",
            $id
        );

        $stat = $this->connection->query($sql);
        return $stat->fetchAll(PDO::FETCH_CLASS);
    }

    public function deleteUser($userId)
    {
        $sql = sprintf(
            "DELETE FROM users WHERE users.id = '%s'",
            $userId
        );

        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
    }

    public function createUser($userData)
    {
        $stmt = $this->connection->prepare("INSERT INTO users (
            name, email, password, role, created_at
            ) VALUES (
            :name, :email, :password, :role, :created_at
        )");
        $stmt->execute($userData);
    }

    public function updateUser($userData)
    {
        $sql = sprintf(
            "UPDATE users SET name = '%s', email = '%s', role = '%s' WHERE id = '%s'",
            $userData['name'],
            $userData['email'],
            $userData['role'],
            $userData['id']
        );

        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
    }

    public function getUser($userId)
    {
        $query = sprintf(
                "SELECT * FROM users where users.id = '%s'",
                $userId);
        if ($stmt = $this->connection->query($query)) {
            return $stmt->fetchAll();
        }
        return false;
    }

    public function indexUser()
    {
        $query = "SELECT * FROM users";
        return $this->connection->query($query)->fetchAll(PDO::FETCH_CLASS, 'App\User');
    }

    public function createTask($taskData)
    {
        $stmt = $this->connection->prepare("INSERT INTO tasks (
            title, description, created_at, user_id
            ) VALUES (
            :title, :description, :created_at, :user_id
        )");
        $stmt->execute($taskData);
    }

    public function getTask($taskId)
    {
        $query = sprintf(
            "SELECT * FROM tasks where tasks.id = '%s'",
            $taskId);
        if ($stmt = $this->connection->query($query)) {
            return $stmt->fetchAll();
        }
        return false;
    }

    public function getTaskById($id)
    {
        $sql = sprintf(
            "SELECT * FROM tasks WHERE id='%s'",
            $id
        );

        $stat = $this->connection->query($sql);
        return $stat->fetchAll(PDO::FETCH_CLASS);
    }

    public function deleteTask($taskId)
    {
        $sql = "DELETE FROM tasks WHERE tasks.id = {$taskId}";
        $this->connection->query($sql);
    }

    public function indexTask()
    {
        $query = "SELECT * FROM tasks";
        return $this->connection->query($query)->fetchAll(PDO::FETCH_CLASS, 'App\Task');
    }

    public function userTasks($userId)
    {
        $query = "SELECT * FROM tasks WHERE tasks.user_id = $userId";
        return $this->connection->query($query)->fetchAll(PDO::FETCH_CLASS, 'App\Task');
    }

    public function updateTask($taskData)
    {
        $sql = sprintf(
            "UPDATE tasks SET user_id = '%s', title = '%s', description = '%s', completed = '%s', completed_at = '%s' WHERE id = '%s'",
            $taskData['user_id'],
            $taskData['title'],
            $taskData['description'],
            $taskData['completed'],
            $taskData['completed_at'],
            $taskData['id'],
        );
        /* dump($sql); */
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
    }

    public function developerUsers()
    {
        $query = "SELECT * FROM users WHERE role='developer'";
        return $this->connection->query($query)->fetchAll(PDO::FETCH_CLASS, 'App\User');
    }

    public function newPendingUsers()
    {
        $query = "SELECT * FROM users WHERE role='pending'";
        return $this->connection->query($query)->fetchAll(PDO::FETCH_CLASS, 'App\User');
    }

    public function completeTask($id)
    {
        $sql = sprintf(
            "UPDATE tasks SET completed = true, completed_at = '%s' WHERE id = '%s'",
            date('Y-m-d H:i:s'),
            $id
        );
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
    }

    public function inCompleteTask($id)
    {
        $sql = sprintf(
            "UPDATE tasks SET completed = false, completed_at = '%s' WHERE id = '%s'",
            date('Y-m-d H:i:s'),
            $id
        );
       
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
    }

    public function createNote ($noteData) {
        $stmt = $this->connection->prepare("INSERT INTO notes
            (user_id, task_id, text) 
            VALUES 
            ({$noteData['user_id']}, {$noteData['task_id']}, '{$noteData['text']}')");

        $stmt->execute($noteData);
    }

    public function getNote($noteId)
    {
        $query = "SELECT * FROM notes where notes.id = {$noteId}";
        return $this->connection->query($query)->fetchAll(PDO::FETCH_CLASS, 'App\Note');
    }

    public function updateNote($noteData)
    {
        $sql = sprintf(
            "UPDATE notes SET text = '%s' WHERE id = '%s'",
            $noteData['text'],
            $noteData['id'],
        );

        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
    }

    public function deleteNote($noteId)
    {
        $sql = sprintf(
            "DELETE FROM notes WHERE notes.id = '%s'",
            $noteId);
        return $this->connection->query($sql);
    }

    public function getNotesByTask($taskId) {
        $query = "SELECT * FROM notes WHERE notes.task_id = $taskId";
        return $this->connection->query($query)->fetchAll(PDO::FETCH_CLASS, 'App\Note');
    }
}
