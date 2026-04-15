    <?php

class Database
{  
    private static $instance = null;
    private $conn;

    private function __construct()
    { 
        //amblil config eksternal
        $config = require BASE_PATH . '/app/config/database.php';
        $this->conn = new mysqli(
            $config['host'],
            $config['user'],
            $config['pass'],
            $config['name']
        );
        
        //ambil config langsung internal
        // $this->conn = new mysqli('localhost', 'root', '', 'pwl1');
        if($this->conn->connect_error) {
            die("Koneksi Gagal: " . $this->conn->connect_error);
        }
    }
    
    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    public function getConnection()
    {
        return $this->conn;
    }
}