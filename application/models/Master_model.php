<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Master_model extends CI_Model{
    function manualQuery($q)
		{
			return $this->db->query($q)->result();
		}
    function insertData($table,$data){
		$res = $this->db->insert($table,$data);
		return $res;
        }
    public function getSelectedData($table,$data)
        {
            return $this->db->get_where($table, $data)->result();
		}
	function cleanData($table){
		$q = $this->db->query("TRUNCATE TABLE $table");
		return $q;
	}
	function getAlldata($table){
		return $this->db->get($table)->result();
	}
	function updateData($table,$data,$field_key)
	{
		$this->db->update($table,$data,$field_key);
	}
	function deleteData($table,$data)
	{
		$this->db->delete($table,$data);
	}
	function getLastID($table){
		return $this->db->query('SELECT id FROM '.$table.' ORDER BY created_at DESC LIMIT 1')->result();
	}
}