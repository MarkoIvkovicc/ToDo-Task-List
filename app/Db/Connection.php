<?php

namespace App\Db;

use PDO;

/**
 * @author     Marko Ivković <markoivkovic16@gmail.com>
 * @author     Živko Obradović <zozobradovic@gmail.com>
 */
class Connection
{
    protected $dbserver = 'localhost';
    protected $user = 'root';
    protected $password = '';
    protected $dbname = 'practice1.2';

    protected $dbConnection;

    public function connect()
    {
        $conn = new PDO("mysql:host=$this->dbserver;port=3308;dbname=$this->dbname", $this->user, $this->password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $this->dbConnection = $conn;
    }
}
