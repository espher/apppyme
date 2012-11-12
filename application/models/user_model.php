<?
	class User_Model extends CI_Model{

		public function  userNameCheck($username){
			$this->db->where('correo',$username);
			$query = $this->db->get('user');
			if($query->num_rows() > 0){
				return TRUE;
			} else {
				return FALSE;
			}
		}

		public function verifyLogin($username, $password){
			$this->db->where('correo',$username);
			$this->db->where('contrasena',$password);
			$query = $this->db->get('user');
			if($query->num_rows()>0){
				return $query->result();
			} else {
				return FALSE;
			}
		}

	}
?>