
<?php
require_once(LIBRARY_PATH . '/class.conn.php');
    
class Crud extends Conn
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Get table data
     * @param string $param sql statement
     * @return array
     */
    public function read($sql)
    {
        $query = $this->connection->query($sql);
        if ($query == false){
            return false;
        } 
        $rows = array();
        while ($row = $query->fetch_array()) {
            $rows[] = $row;
        }
        return $rows;
    }
    
    /**
     * Save or update data
     * @param string $param sql statement
     * @return bool
     */
    public function execute($sql)
    {
        $query = $this->connection->query($sql);
    
        if ($query == false){
            return false;
        }else{
            return true;
        }        
    }

    /**
     * Sanitize data
     * @param string $param field value
     * @return string
     */
    public function escape_string($value)
    {
        return $this->connection->real_escape_string($value);
    }
}