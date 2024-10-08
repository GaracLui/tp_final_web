<?php
/**
 * Base
 */
class Noticia_model extends CI_Model
{
	// ABM

	
	public function __construct()
	{
		parent::__construct();
	}

	public function alta($datos)
	{
		return $this->db->insert('noticias', $datos);
	}

	public funvction modifica($datos, $id)
	{
		$this->db->where('id', $id);
		return $this->db->update('noticias', $datos);
	}

	public function baja($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('noticias');
	}

	public function listar($cantidad)
	{
		$this->db->select('*');
		$this->db->from('noticias');
		$this->db->limit($cantidad);
		$this->db->order_by('fecha', 'DESC');
		$this->db->where('estado', 1);
		$query = $this->db->get();
		return $query->result();
	}
}