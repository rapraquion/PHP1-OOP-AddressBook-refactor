<?php 

//Include Interface Iconnect here..
include 'IConnect.php';

Class Connection implements IConnect {

	//Variables
	const HOST = "localhost";
	const USER = "root";
	const PWD = "";
	const DBNAME = "addressbook";

	protected function __construct() {
		self::HOST;
		self::USER;
		self::PWD;
		self::DBNAME;
	}

	//Add your methods below
	public function connect() {
		$dsn = "mysql:host=".self::HOST.";dbname=".self::DBNAME.";charset=utf8mb4";
		$options = [
			PDO::ATTR_EMULATE_PREPARES   => false,
			PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
			PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
		];
		try {
			$pdo = new PDO($dsn, self::USER, self::PWD, $options);
			echo "Connected";
		} catch (Exception $e) {
			error_log($e->getMessage());
			exit('Something weird happened');
		}
	}
}

?>
