<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_user extends MY_Model {
    public function __construct(){
        $table = "users";
        parent::__construct($table);
		}

		private function setUniqueUsername($name, $inc = '')
		{
			$uname = $name.$inc;//slugify($name . $inc);
			$q = $this->db->where('fullname', $uname)->get($this->table);
			if ($q->num_rows() > 0) {
				return $this->setUniqueUsername($uname, $q->num_rows() + 1);
			}
			return $uname;
		}
		
		public function getUser()
	{
		$this->db->select('*');
		$this->db->from($this->table);
		// $this->db->where_in('systype', [1,2,3]); // not peserta
		$q = $this->db->get();
		return $q->result();
	}

	public function getUserById($id = 'admin', $col = 'fullname')
	{
		$this->db->select('*');
		$this->db->from($this->table);
		$this->db->where($col, $id); // not peserta
		$q = $this->db->get();
		return $q->result();
	}

	public function save($data)
	{
		// $user = [
		// 	'nama' => $data['nama'],
		// 	'sysusername' => $this->setUniqueUsername($data['sysusername']),
		// 	'syspass' => password_hash($data['syspass'], PASSWORD_BCRYPT),
		// 	'systype' => $data['systype'],
		// 	'sysemail' => $data['sysemail'],
		// 	'parent' => (isset($data['parent'])) ? $data['parent'] : null ,
		// 	'status' => (isset($data['status'])) ? $data['status'] : 1 ,
		// ];
		$user = [
			'fullname' => $this->setUniqueUsername($data['fullname']),
			'password' => password_hash($data['password'], PASSWORD_BCRYPT),
			'email' => $data['email'],
			'tgl_buat' => (isset($data['tgl_buat'])) ? $data['tgl_buat'] : date('Y-m-d H:i:s'),
			'tgl_edit' => (isset($data['tgl_edit'])) ? $data['tgl_edit'] : date('Y-m-d H:i:s')
		];
		$this->db->insert($this->table, $user);
	}

	public function updatePassword($password, $index, $key = 'id')
	{
		$data['password'] = password_hash($password, PASSWORD_BCRYPT);
		$this->db->where($key, $index);
		$this->db->update($this->table, $data);
	}

	public function updateEmail($email, $index, $key = 'id')
	{
		$data['email'] = $email;
		$this->db->where($key, $index);
		$this->db->update($this->table, $data);
	}

  public function login($email, $password)
    {

    	$datalogin['valid'] 	= false;
    	$datalogin['redirect']	= 'login';
    	$datalogin['msg']		= '';

      // $user = $this->db->where('email',  $email)->get($this->table)->row();
      $user = (object) ['password' => password_hash('12345', PASSWORD_DEFAULT), 'id' => 1];

      // var_dump($user->password);die;
    	if (!$user) {
    		$datalogin['msg'] =  'Email dan password tidak cocok dengan data kami.';
    		return $datalogin;
    	}

    	if (!password_verify($password, $user->password)) {
    		$datalogin['msg'] = 'Password anda tidak cocok dengan data kami.';
    		return $datalogin;
		}
		
		unset($user->password);

		// session
		if ($user) {
			$datalogin['redirect'] = 'backoffice/dashboard';
			$this->session->set_userdata('_userId', $user->id);
			$this->session->set_userdata('_isLogin', TRUE);
			$this->session->set_userdata('_isAdmin', TRUE);
			$this->session->set_userdata('_viewBackend', TRUE);
			$this->session->set_userdata('_userData', $user);
		}

    	$datalogin['valid']	= true;
    	$datalogin['msg']	= 'Login berhasil ...';
    	return $datalogin;
		}

		public function delete($id)
	{
		if ($id == 1) {
			return "Cannot delete user default admin";
			// die();
		}
		$this->db->trans_start();

		$this->db->where('id', $id);
		$q = $this->db->get($this->tblUser);
		$user = $q->row();

		// $this->db->where('email', $user->email);
		// $this->db->delete($this->tblUser);

		$this->db->where('id', $id);
		$del = $this->db->delete($this->tblUser);

		$this->db->trans_complete();
		if ($this->db->trans_status() === FALSE)
		{
			return log_message('error', 'Error query transaction database table on model ' . get_class() . ' method ' . __FUNCTION__.' ()');
		}

		return $del;
	}

}