<?php
class user{
    private $username;
    private $password;
    private $name;

    public function __construct($username, $password, $name) {
        $this->username = trim(stripslashes(htmlspecialchars($username)));
        $this->password = $password;
        $this->name = $name;
    }
    
    public function getUsername() {
        return $this->username;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getName() {
        return $this->name;
    }
}
?>
