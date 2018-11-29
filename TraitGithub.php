<?php

trait TraitGithub
{

protected $account;

public function AddGithub (string $account)

{$this->account=$account;}

public function GetGithub ():string
{return $this->account;}


}

















 ?>
