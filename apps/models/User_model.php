<?php

use MiniMvc\Apps\Core\Bootstraping\Database;

/**
 * Documentasi Code
 */

class User_model
{
	private $table = 'tb_user';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllUser()
	{

		$this->db->query('SELECT * FROM ' . $this->table);
		return $this->db->resultSetArray();
	}

	public function getUserId($id)
	{
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
		$this->db->bind('id', $id);
		return $this->db->singleArray();
	}

	public function verifpasswd($password)
	{
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE passw=:passw');
		$this->db->bind('passw', $password);
		return $this->db->singleArray();
	}

	public function deleteUserId($id)
	{
		$this->db->query('DELETE FROM ' . $this->table . ' WHERE id=:id');
		$this->db->bind('id', $id);

		$this->db->execute();
		return $this->db->rowCount();
	}
	public function updateUserId($data)
	{
		// UPDATE `tb_user` SET `id`,`userid`,`nama`,`deskripsi`=,`foto`=,`user_name`=,`passw`=,`level`=,`status`= WHERE 1
		$query = "UPDATE tb_user SET id=:id, userid=:userid, nama=:nama, deskripsi=:deskripsi, foto=:foto, user_name=:username, passw=:passw, level=:level, status=:status WHERE id=:id";
		$this->db->query($query);

		// binding data
		$this->db->bind('id', $data['id']);
		$this->db->bind('userid', $data['userid']);
		$this->db->bind('nama', $data['nama']);
		$this->db->bind('deskripsi', $data['deskripsi']);
		$this->db->bind('username', $data['user_name']);
		$this->db->bind('passw', $data['passw']);
		$this->db->bind('level', $data['level']);
		$this->db->bind('status', $data['status']);
		
		// untuk file
		$this->db->bind('foto', $data['foto']);

		$this->db->execute();
		return $this->db->rowCount();
	}

	public function getUser($username, $password)
	{

		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE user_name=:user_name AND passw=:passw');

		$this->db->bind('user_name', $username);
		$this->db->bind('passw', $password);
		return $this->db->singleArray();
	}

	public function register($data)
	{
		// (`id`, `userid`, `nama`, `deskripsi`, `foto`, `user_name`, `passw`, `level`, `status`);
		$query = "INSERT INTO $this->table VALUES ('', :userid, :nama, :deskripsi, :foto, :user_name, :passw, :level, :status)";
		$this->db->query($query);

		// binding untuk data text
		$this->db->bind('userid', $data['userid']);
		$this->db->bind('nama', $data['nama']);
		$this->db->bind('deskripsi', $data['deskripsi']);
		$this->db->bind('user_name', $data['username']);
		$this->db->bind('passw', $data['password']);
		$this->db->bind('level', $data['level']);
		$this->db->bind('status', $data['status']);

		// binding untuk data file
		$this->db->bind('foto', $data['image']);

		$this->db->execute();
		return $this->db->rowCount();
	}
}