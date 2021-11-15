<?php

namespace MiniMvc\Apps\Core\Bootstraping;

use \PDO;

/**
 * -----------------------------------------------------------
 * Documentasi Code Database
 * Author : Nagara
 * -----------------------------------------------------------
 * 
 * config database wrapper menggunakan PDO
 */
class Database
{
	private $host = DB_HOST;
	private $user = DB_USER;
	private $pass = DB_PASS;
	private $db_name = DB_NAME;

	private $dbh;
	private $statement;

	public function __construct()
	{
		// data source name
		$dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->db_name;

		$option = [
			PDO::ATTR_PERSISTENT => TRUE,
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
		];

		// atasi error
		try {
			//code...
			$this->dbh = new PDO($dsn, $this->user, $this->pass, $option);
		} catch (PDOException $e) {
			//throw $e;
			die($e->getMessage());
		}
	}

	/**
	 * membuat function query pada sql
	 *
	 * @param string $query
	 * @return void
	 */
	public function query($query)
	{
		$this->statement = $this->dbh->prepare($query);
	}

	/**
	 * untuk melakukan binding sebelum data di masukan ke database
	 *
	 * @param [type] $param
	 * @param [type] $value
	 * @param [type] $type
	 * @return void
	 */
	public function bind($param, $value, $type =  null)
	{
		if (is_null($type)) {
			switch (true) {
				case is_int($value):
					# code...
					$type = PDO::PARAM_INT;
					break;
				case is_bool($value):
					#code
					$type = PDO::PARAM_BOOL;
					break;
				case is_null($value):
					#code
					$type = PDO::PARAM_NULL;
					break;
				default:
					$type = PDO::PARAM_STR;
			}
		}

		$this->statement->bindValue($param, $value, $type);
	}

	/**
	 * statement untuk execute database
	 *
	 * @return void
	 */
	public function execute()
	{
		$this->statement->execute();
	}

	/**
	 * membuat hasil berupa set array associative
	 *
	 * @return void
	 */
	public function resultSetArray()
	{
		$this->execute();
		return $this->statement->fetchAll(PDO::FETCH_ASSOC);
	}

	/**
	 * membuat hasil berupa set format JSON
	 *
	 * @return void
	 */
	public function resultSetJSON()
	{
		header('Content-Type: application/json');
		$this->execute();
		return json_encode($this->statement->fetchAll(PDO::FETCH_ASSOC), JSON_PRETTY_PRINT);
	}

	/**
	 * membuat hasil set format Object
	 *
	 * @return void
	 */
	public function resultSetObject()
	{
		$this->execute();
		return $this->statement->fetchAll(PDO::FETCH_OBJ);
	}

	/**
	 * membuat hasil set format array untuk single data
	 *
	 * @return array
	 */
	public function singleArray()
	{
		$this->execute();
		return $this->statement->fetch(PDO::FETCH_ASSOC);
	}

	/**
	 * membuat hasil set format JSON untuk single data
	 *
	 * @return String
	 */
	public function singleJSON()
	{
		header('Content-Type: application/json');
		$this->execute();
		return json_encode($this->statement->fetch(PDO::FETCH_ASSOC),  JSON_PRETTY_PRINT);
	}

	/**
	 * membuat hasil set format obejct untuk single data
	 *
	 * @return object
	 */
	public function singleObject()
	{
		$this->execute();
		return $this->statement->fetch(PDO::FETCH_OBJ);
	}


	/**
	 * membuat menhitung row yang berhasil
	 *
	 * @return void
	 */
	public function rowCount()
	{
		return $this->statement->rowCount();
	}
}
