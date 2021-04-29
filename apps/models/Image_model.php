<?php

use MiniMvc\Apps\Core\Bootstraping\Database;

/**
 * Documentasi Code
 */

class Image_model
{
	private $table = 'tb_image';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllImage()
	{
		$this->db->query('SELECT * FROM ' . $this->table);
		return $this->db->resultSetArray();
	}

	public function insertdata($data)
	{
		// (`id`, `uniqid`, `judul`, `image`, `createat`, `updateat`, `updateby`)
		$query = "INSERT INTO $this->table VALUES ( '', :uniqid, :judul, :image, :createat, :updateat, :updateby)";
		$this->db->query($query);

		// binding untuk data text
		$this->db->bind('uniqid', $data['uniqid']);
		$this->db->bind('judul', $data['judul']);
		$this->db->bind('image', $data['image']);
		$this->db->bind('createat', $data['createat']);
		$this->db->bind('updateat', $data['updateat']);
		$this->db->bind('updateby', $data['updateby']);

		$this->db->execute();
		return $this->db->rowCount();
	}
}
