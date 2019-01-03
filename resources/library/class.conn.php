<?php
 /**
 * Mysqli connection class
 */
class Conn 
{    
    private $host     = 'localhost';
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