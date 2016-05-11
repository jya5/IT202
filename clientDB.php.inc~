#!/usr/bin/php
<?php
class clientDB{
  private $db;
  public function __construct(){
    $this->db = new mysqli("localhost", "root", "12101992De@", "IT202");
    if ($this->db->connect_errno>0){
      echo __file__.__line__."failed to connect to database re:".$this->db->connect_error.PHP_EOL;
      exit(0);
    }
    echo "DB connected".PHP_EOL;
  }
  public function __destruct(){
    $this->db->close();
    echo "DB closed".PHP_EOL;
  }
  
  public function getClientId($name){
    $query = "select clientId from clients where clientName = '$name';";
    $results =$this->db->query($query);
    if (!$results){
      return "error with results: ".$this->db->error.PHP_EOL;
      return 0;
    }
    $client = $results->fetch_assoc();
    if (isset($client['clientId'])){
      return $client['clientId'];
    }
    return 0;
    
  }
  
  public function validateClient($name, $password){
   if ($this->getClientId($name) == 0){
      echo "user $name does exists!!!".PHP_EOL;
      return false;
    }
    $query = "select * from clients where clientName=$'name';";
    $results =$this->db->query($query);
    if (!results){
      return "error with results: ".$this->db->error.PHP_EOL;
      return false;
    }
    $client = $results->fetch_assoc();{
      if ($client['clientPW'] == $password){
	return 0;
      }
    }
    print_r($result);
  }
  
  
  
  public function addNewClient($name, $password){
    if ($this->getClientId($name) != 0){
      echo "user $name already exists!!!".PHP_EOL;
      return false;
    }
    $now= date("Y-m-d h:i:s", time());
    $addQuery = "insert into clients (clientName, clientPW, activeSession, lastLogin) values('$name','$password','$now','$now')";
    if ($this->db->query($addQuery) == TRUE){
      echo "New record created successfully".PHP_EOL;
    }else{ 
      echo "Error: ".$addQuery."\n".$this->db->error.PHP_EOL;
  }
  }

}
?>
