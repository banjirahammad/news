<?php

  class database{

    public $host = host;
    public $user = user;
    public $pass = password;
    public $dbname = dbname;
    public $conn;
    public $error;


    public function __construct(){
      $this->connectDb();
    }

    private function connectDb(){
      $this->conn = new mysqli($this->host,$this->user,$this->pass,$this->dbname);

      if (!$this->conn) {
        $this->error =  'connection Failed'.$this->conn->connect_error;
        return FALSE;
      }
    }

    public function select($query){
      $result = $this->conn->query($query) or die($this->conn->error. __LINE__);
      if ($result->num_rows > 0 ) {
        return $result;
      }
      else {
        return FALSE;
      }
    }


  }
