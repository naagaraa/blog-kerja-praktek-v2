<?php

use MiniMvc\Apps\Core\Bootstraping\Database;

/**
 * Documentasi Code
 */

class Contact_model
{
	private $table = 'tb_contact';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllContact()
	{
		$this->db->query('SELECT * FROM ' . $this->table);
		return $this->db->resultSetArray();
	}

	public function getContactId($id)
	{
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
		$this->db->bind('id', $id);
		return $this->db->singleArray();
	}

	public function getContactPerihal($perihal)
	{
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE perihal=:perihal');
		$this->db->bind('perihal', $perihal);
		return $this->db->singleArray();
	}

	public function insertContact($data)
	{

		// (`id`, `nama`, `email`,'mobile', `subject`, 'perihal , `pesan`, `tanggal`)
		$query = "INSERT INTO $this->table VALUES ('', :nama, :email, :mobile, :company, :perihal, :pesan, :tanggal)";
		$this->db->query($query);

		// binding untuk data text
		$this->db->bind('nama', $data['name']);
		$this->db->bind('email', $data['email']);
		$this->db->bind('mobile', $data['mobile']);
		$this->db->bind('company', $data['company']);
		$this->db->bind('pesan', $data['message']);
		$this->db->bind('perihal', $data['perihal']);
		$this->db->bind('tanggal', $data['tanggal']);

		$this->db->execute();
		return $this->db->rowCount();
	}
}
