 <?php

 	class smartSql {
 		public function __construct($user, $password, $database, $host = 'localhost', $charset = 'utf8') {
 			$this->user = $user;
 			$this->password = $password;
 			$this->database = $database;
 			$this->host = $host;
       $this->connection = new mysqli($this->host, $this->user, $this->password, $this->database);
       $this->connection -> set_charset($charset);
 		}
 		public function connect($tryConnect) {
       if($tryConnect==true and !mysqli_ping($this->connection)){
 			$this->connection = new mysqli($this->host, $this->user, $this->password, $this->database);
       $this->connection -> set_charset($charset);
       }
       return $this->connection;
 		}
     public function ss($query, $dataTypes, $data, $tryConnect = 0){
       // Connect to the database

       $db = $this->connect($tryConnect);
       $stmt = $db->prepare($query);
       $stmt->bind_param($dataTypes, ...$data);
 			$stmt->execute();
 			$result = mysqli_affected_rows($db);
 			if(preg_match("/SELECT.*?FROM/", $query))
       $result = $stmt->get_result();
 			elseif(preg_match("/INSERT.*?INTO/", $query))
       $result = $db->insert_id;
 			$stmt->close();
       return $result;
 		}

 }

$connection = new smartSql('root', 'pass', 'database_username');


