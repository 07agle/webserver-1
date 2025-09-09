<?php
include(__DIR__ . "/../../inc/cleanInput.php");

class person{
    private $username;
    private $password;

    public function __construct($username, $password) {
        $this->username = cleanData($username);
        $this->password = $password;
    }
    
    public function getUsername() {
        return $this->username;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($passWord) {
        $this->password = $passWord;
    }
}
?>
