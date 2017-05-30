<?php 

class TableRegister

{
	private $db;

    protected $session = 'user';

    protected $table = 'TableRegister';

	public function __construct(Database $database)
	{
      $this->db = $database;
 
	}

	public function build()
	{
      return $this->db->query("CREATE TABLE IF NOT EXISTS TableRegister (id_table INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
       name VARCHAR(200) NOT NULL, ape VARCHAR(100) NOT NULL, user VARCHAR(255) NOT NULL UNIQUE, tel VARCHAR(200) NOT NULL, status VARCHAR(200) NOT NULL)" );
	}

	public function create($data)
	{

       var_dump($data);
       return $this->db->table($this->table)->insert($data);
	}


	public function tableusers($data)
	{
		$user = $this->db->table($this->table)->where('status', '=', $data['status']);
		if ($user->count()) 
		{
			return $user->get();
		}

	}

	public function check()
	{
		return isset($_SESSION[$this->session]);
	}

	protected function setAuthSession($id)
	{
		$_SESSION[$this->session]= $id;
	}
}
