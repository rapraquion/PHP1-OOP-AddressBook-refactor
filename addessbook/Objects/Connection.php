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
	}

	//Add your methods below
	public function connect() {
		$this->dsn = 'mysql:host='. $this->host . ';dbname='. $this->dbname;
		$this->pdo = new PDO($this->dsn, $this->user, $this->pwd);
		$this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
		$this->pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
	}

	public function getConnection() {
		return $this->pdo;
	}
}

?>
