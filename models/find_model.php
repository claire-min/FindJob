<?php

class Find_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
	}

    public function listAll() {
        return $this->db->select('SELECT * FROM jobs order by id desc');
    }
    
    
	public function find()
	{
		$keyword = $_POST['keyword'];
		$location = $_POST['location'];
		if ($keyword == null) {
			return $this->db->select("SELECT * FROM jobs WHERE
								 location LIKE '%$location%' order by id desc");
		}
		else {
			if ($location == null) {
				return $this->db->select("SELECT * FROM jobs WHERE
								 title LIKE '%$keyword%' order by id desc");
			}
			else {
				return $this->db->select("SELECT * FROM jobs WHERE
								 title LIKE '%$keyword%' AND location = '$location' order by id desc");
			}
		
		}
	}
}