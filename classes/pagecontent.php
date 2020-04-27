<?php

  class pageContent{

    //all page header methods
    public function getHeader(){
      require_once('inc/header.php');
    }

    //all section methods
    public function getSection($section){
      require_once 'inc/'.$section.'.php';
    }















    //all page footer methods
    public function getFooter(){
      require_once('inc/footer.php');
    }

  }
