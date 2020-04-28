<?php

  class database{

    public $host = host;
    public $user = user;
    public $pass = password;
    public $dbname = dbname;
    public $con;
    public $error;

    public function connectDb(){

      $this->con = new mysqli($this->host,$this->user,$this->pass,$this->dbname);

      if (!$this->con) {
        $this->error =  'connection Failed'.$this->con->connect_error;
        return FALSE;
      }
      else {
        echo "all right";
      }

    }


  }
