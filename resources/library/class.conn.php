<?php
 /**
 * Mysqli connection class
 */
class Conn 
{    
    private $host     = 'mysql.cpdgo8oho0u4.us-east-2.rds.amazonaws.com';
    private $username = 'root';
    private $password = 'C0mputer3';
    private $database = 'movies';
    
    protected $connection;
    
    public function __construct()
    {
        if (!isset($this->connection)) {
            $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);
            if (!$this->connection) {
                echo 'Connection failed, database is unavailable.';
                exit;
            }            
        }    
        return $this->connection;
    }
}
?>