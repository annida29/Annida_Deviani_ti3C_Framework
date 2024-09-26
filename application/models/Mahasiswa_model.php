<?php

/**
 * summary
 */
class Mahasiswa_model extends CI_Controller{
	public function getAllMahasiswa()
	{
		// //menggunakan cara pertama
		// $query = $this->db->get('mahasiswa');
		// return &query->result_array();
		//menggunakan cara cepat metode chaining // pemanggilan database
		return $this->db->get('mahasiswa')->result_array();
		
	}
}