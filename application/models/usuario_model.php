<?php
	class Usuario_Model extends CI_Model{

		public function  verificaUsuario($username){
			$this->db->where('correo',$username);
			$query = $this->db->get('usuario');
			if($query->num_rows() > 0){
				return TRUE;
			} else {
				return FALSE;
			}
		}


		public function  verificaLogin($username,$contrasena){
			$this->db->where('correo',$username);
			$this->db->where('contrasena',$contrasena);
			$query = $this->db->get('usuario');
			if($query->num_rows()>0){
				return $query->result();
			} else {
				return FALSE;
			}
		}

	}