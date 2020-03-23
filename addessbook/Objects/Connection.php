<?php 

//Include Interface Iconnect here..
include 'IConnect.php';

Class Connection implements IConnect {

	//Variables
	private $host = "localhost";
	private	$dbname = "addressbook";
	private	$user = "root";
	private	$pwd = "";


	protected function __construct() {
		self::connect();
		self::getConnection();
	}

	//Add your methods below
	public function connect() {
		try {
            $this->conn = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname, $this->user, $this->pass);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        }
        catch(PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
	}

	public function getConnection() {
        return $this->conn;
	}
}

?>
