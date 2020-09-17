<?php
class database
{
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "mkm";
    
    public $koneksi;

    // Membuat Koneksi Ke Database
    function getConnection(){
        $this->koneksi = null;
        
        try{
        $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->database);
        }catch(Exception $e){
            echo "Koneksi database gagal : " . $e->getMessage();
        }
        return $this->koneksi;
    }

    // Login & Register
    function register($username, $password, $nama)
    {
        $password = password_hash($password, PASSWORD_DEFAULT);
        mysqli_query($this->koneksi, "insert into mkm_user values ('','$username','$password','$nama')");
    }

    function login($username, $password, $remember)
    {
        $query = mysqli_query($this->koneksi, "select * from mkm_user where username='$username'");
        $data_user = $query->fetch_array();

        if (password_verify($password, $data_user['password'])) {

            if ($remember) {
                setcookie('username', $username, time() + (60 * 60 * 24 * 5), '/');
                setcookie('nama', $data_user['nama'], time() + (60 * 60 * 24 * 5), '/');
            }
            $_SESSION['username'] = $username;
            $_SESSION['nama'] = $data_user['nama'];
            $_SESSION['is_login'] = TRUE;
            return true;
        } else {
            return false;
        }
    }

    // relogin
    function relogin($username)
    {
        $query = mysqli_query($this->koneksi, "select * from mkm_user where username='$username'");
        $data_user = $query->fetch_array();
        $_SESSION['username'] = $username;
        $_SESSION['nama'] = $data_user['nama'];
        $_SESSION['is_login'] = TRUE;
    }
}
