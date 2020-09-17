<?php
session_start();
class user{
    private $koneksi;

    public $id;
    public $username;
    public $password;
    public $status;

    function __construct($db)
    {
        $this->koneksi = $db;
    }

    function login()
    {
        $query = mysqli_query($this->koneksi, "select * from mkm_user where username='$this->username'");
        $userData = mysqli_fetch_array($query);
        
        if (password_verify($this->password, $userData['password'])) {
            date_default_timezone_set('Asia/Jakarta');
            $currentTime = date('H:i:s');

            // Save Cookie & Session
            setcookie('username', $userData['username'], time() + (60 * 60), '/');
            setcookie('time', $currentTime, time() + (60 * 60), '/');
            
            // $_SESSION['username'] = $userData['username'];
            // $_SESSION['time'] = $currentTime;

            $query = mysqli_query($this->koneksi, "insert into mkm_loginlog values ('','$userData[id]','$userData[username]','$currentTime')");

            return true;
        } else {
            return false;
        }
    }

    function logout()
    {
        session_unset();
        session_destroy();
        setcookie('PHPSESSID', "", time() - 3600, '/');
        setcookie('username', "", time() - 3600, '/');
        setcookie('time', "", time() - 3600, '/');
        return true;
    }
    
    function createUser()
    {
        $passwordHash = password_hash($this->password, PASSWORD_DEFAULT);
        $query = mysqli_query($this->koneksi, "insert into mkm_user values ('','$this->username','$passwordHash')");
        return $query;
    }
}
?>