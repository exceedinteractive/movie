<?php
require_once(LIBRARY_PATH . '/class.conn.php');
    
class User extends Conn
{
    protected $_username;    
    protected $_password;

    public function __construct($user = '', $pass = '')
    {
        parent::__construct();
        $this->_uasername = $user;
        $this->_password  = $pass;
    }

    public function login()
    {
        $user = $this->checkCredentials();
        if ($user) {
            $this->_user = $user;
            $_SESSION['user_id'] = $user['id'];
            return $user['id'];
        }
        return false;
    }

    protected function checkCredentials()
    {
        $sql = "SELECT * FROM users WHERE username = '" . $this->connection->real_escape_string($this->_uasername) . "'";
        $query = $this->connection->query($sql);
        if ($query == false){
            return false;
        }else{
            $row = $query->fetch_array();
            //echo $row['password'] . '<br>' . sha1($this->_password);
            //exit();
            if (count($row) > 0) {
                if ($row['password'] === strtoupper(sha1($this->_password))) {
                    return $row;
                }else{
                    return false;
                }
            }else{
                return false;
            }
        }
        return false;
    }

    public function logout()
    {
        session_unset();
        session_destroy();
        return true;
    }

    public function getUser()
    {
        return $this->_user;
    }
}