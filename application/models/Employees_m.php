<?php
class Employees_m extends CI_model
{
    public function employeesGet()
    {
        $this->db->select('*');
        $this->db->from('employees');
        $this->db->join('employees_levels', 'employees.employees_levels_level_id = employees_Levels.level_id');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query;
        } else {
            return false;
        }
    }

    public function employeeCreate()
    {   
        $this->db->insert('employees', [
            'name' => $this->input->post('name'),
            'gender' => $this->input->post('gender'),
            'email' => $this->input->post('email'),
            'username' => $this->input->post('username'),
            'password' => md5($this->input->post('password')),
            'address' => $this->input->post('address'),
            'phone' => $this->input->post('phone'),
            'created_at' => date('Y-m-d H:i:s'),
            'employees_levels_level_id' => $this->input->post('level')
        ]);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function employeeGet($where)
    {
        $this->db->select('
            employee_id,
            name,
            gender,
            email,
            username,
            password,
            address,
            phone,
            created_at,
            updated_at,
            level_id,
            level_name
        ');
        $this->db->from('employees');
        $this->db->join('employees_levels', 'employees.employees_levels_level_id = employees_levels.level_id');
        $this->db->where('employee_id', $where);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return false;
        }
    }

    public function employeeDelete($where)
    {
        $this->db->delete('employees', ['employee_id' => $where]);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function employeeUpdate($where)
    {
        $this->db->update('employees', [
            'name' => $this->input->post('name'),
            'gender' => $this->input->post('gender'),
            'email' => $this->input->post('email'),
            'username' => $this->input->post('username'),
            'address' => $this->input->post('address'),
            'phone' => $this->input->post('phone'),
            'updated_at' => date('Y-m-d H:i:s'),
            'employees_levels_level_id' => $this->input->post('level')
        ], ['employee_id' => $where]);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function levelsGet()
    {
        return $this->db->get('employees_levels');
    }

    public function levelCreate()
    {
        $this->db->insert('employees_levels', [
            'level_name' => $this->input->post('level-name')          
        ]);
        $levelLastId = $this->db->insert_id();
        $levelAccess = $this->input->post('level-access[]');
        if(isset($levelAccess)){
            foreach ($levelAccess as $item) {
                $this->db->insert('employees_levels_has_access', [
                    'employees_levels_level_id' => $levelLastId,
                    'access_access_id' => $item
                ]);
            }
        }
        
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function levelDelete($id)
    {
        $this->db->delete('employees_levels_has_access', ['employees_levels_level_id' => $id]);
        $this->db->delete('employees_levels', ['level_id' => $id]);
        
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function levelUpdate($where)
    {
        $this->db->update('employees_levels', [
            'level_name' => $this->input->post('level-name')
        ], ['level_id' => $where]);
        $levelAccess = $this->input->post('level-access[]');
        if(isset($levelAccess)){
            $this->db->delete('employees_levels_has_access', ['employees_levels_level_id' => $where]);                            
            foreach ($levelAccess as $item) {
                $this->db->insert('employees_levels_has_access', [
                    'employees_levels_level_id' => $where,
                    'access_access_id' => $item
                ]);
            }
        }elseif(empty($levelAccess)){
            $this->db->delete('employees_levels_has_access', ['employees_levels_level_id' => $where]);
        }


        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function levelsAccessGet()
    {
        return $this->db->get('employee_levels_access');
    }

    public function levelGet($where){
        $this->db->select('level_id, level_name');
        $this->db->from('employees_levels');
        $this->db->where('level_id', $where);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query;
        } else {
            return false;
        }
    }

    public function levelAccessGet($where){
        $this->db->select('access_id, access_name');
        $this->db->from('employees_levels_has_access');
        $this->db->join('employee_levels_access', 'employees_levels_has_access.access_access_id = employee_levels_access.access_id');
        $this->db->where('employees_levels_level_id', $where);
        $query = $this->db->get();
        // var_dump($query->result());die();
        return $query;
    }
}
