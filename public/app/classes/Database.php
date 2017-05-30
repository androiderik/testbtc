<?php 
class Database 
{
	protected $host = 'localhost';

	protected $db = 'register';

	protected $username = 'root';

	protected $password = 'root';

	protected $pdo;
	
    protected $stmt;
    protected $table;

    protected $debug = true;

 

	public function __construct()
	{
		try
		{
          $this->pdo = new PDO("mysql:host=$this->host;dbname=$this->db", $this->username, $this->password);

          if ($this->debug) 
          {
          	$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          }
		}
		catch(PDOException $e)
		{
          die($this->debug ? $e->getMessage() :  'error');
		}
	}

	public function query($sql)
	{
      return $this->pdo->query($sql);
	}

	public function table ($table)
	{
		$this->table = $table;
		return $this;
	}

	public function insert($data)
	{
		$keys = array_keys($data);
		$fields = '`'.implode('`,`', $keys). '`';
	    echo $placeholders = ':'.implode(',:', $keys);

		$sql = "INSERT INTO $this->table ($fields) VALUES ($placeholders)";

		$this->stmt = $this->pdo->prepare($sql);

		return $this->stmt->execute($data);
	}

	public function where($field, $operator, $value)
	{
	   $this->stmt= $this->pdo->prepare("SELECT * FROM  $this->table WHERE $field $operator :value");

	   $this->stmt->execute(['value' => $value]);

	   return $this;
   }

   public function count()
   {
   	return $this->stmt->rowCount();
   }

    public function get()
   {
   	return $this->stmt->fetchAll(PDO::FETCH_OBJ);
   }

   public function first()
   {
   	return $this->get()[0];
   }



}


