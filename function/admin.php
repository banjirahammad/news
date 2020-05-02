<?php

  /*************************************************************************
  this page maintain all the function for the admin
  *************************************************************************/
  require_once '../config/config.php';
  require_once '../classes/database.php' ;
  require_once '../classes/pagecontent.php' ;
  require_once '../classes/session.php' ;


  //object of page content classes
  $page_content = new pageContent;



  //object of database connection class
  $db = new database;
