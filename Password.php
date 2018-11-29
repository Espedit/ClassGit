<?php

class Password
{
  public $password;


  public function  __construct ($string,$str)

  {$this->user=$string;
  $this->password=$str;

  }
  public function Getpassword ()

  {

    return $this->password;


  }



}
?>
