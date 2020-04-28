<?php

  require_once(../config.php);

  class database{

    public $host = host;
    public $user = user;
    public $pass = password;
    public $dbname = bdname;
    public $con;
    public $error;

    private function connectDb(){

      $this->con = new mysqli($this->host,$this->user,$this->pass,$this->dbname);

      if (!$this->con) {
        $this->error =  'connection Failed'.$this->con->connect_error;
        return FALSE;
      }

    }


  }
