<?php

use MiniMvc\Apps\Core\Bootstraping\Database;

/**
 * Documentasi Code
 */

class Sosmed_model
{
	private $table = 'tb_sosmed';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllSosmed()
	{
		$this->db->query('SELECT * FROM ' . $this->table);
		return $this->db->resultSetArray();
	}

	public function insertdata($data)
	{
		// (`id`, `uniqid`, `sosmed`, `link`, `createat`, `updateat`, `updateby`)
		$query = "INSERT INTO $this->table VALUES ( '', :uniqid, :sosmed, :link, :createat, :updateat, :updateby)";
		$this->db->query($query);

		// binding untuk data text
		$this->db->bind('uniqid', $data['uniqid']);
		$this->db->bind('sosmed', $data['sosmed']);
		$this->db->bind('link', $data['link']);
		$this->db->bind('createat', $data['createat']);
		$this->db->bind('updateat', $data['updateat']);
		$this->db->bind('updateby', $data['updateby']);

		$this->db->execute();
		return $this->db->rowCount();
	}
}
