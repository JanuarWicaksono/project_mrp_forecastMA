<?php 
 
	class Login_m extends CI_Model{

		public function loginCheck($username, $password){
    		// var_dump($username, $password, 'dawdadawd');die();
			return $this->db->get_where('employees', [
				'username' => $username,
				'password' => md5($password)
			]);
		}

		public function employeeGet($levelId){
			$this->db->select('
				*
			');
			$this->db->from('employees_levels');
			$this->db->where('level_id', $levelId);
			
			$query = $this->db->get();
			if ($query->num_rows() > 0) {
				return $query;
			} else {
				return false;
			}
		}

		public function employeeAccessGet($levelId){
			$this->db->select('
				access_id,
				access_name
			');
			$this->db->from('employees_levels_has_access');
			$this->db->join('employee_levels_access', 'employees_levels_has_access.access_access_id = employee_levels_access.access_id');
			$this->db->where('employees_levels_has_access.employees_levels_level_id', $levelId);

			$query = $this->db->get();
			if ($query->num_rows() > 0) {
				return $query;
			} else {
				return false;
			}
		}

	}