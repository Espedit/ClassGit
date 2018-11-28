

<?php

spl_autoload_register(function($class)
{

require_once  __DIR__  . '/'. str_replace('\\','/',$class).".php";


});



$UserTIM= new ClassBase();

$UserTIM->setUser('Espedit |'); echo $UserTIM->getUser();


echo'<br><br>';

class User_real extends user


{
  public $user;


  public function __construct ($string)

  {$this->user=$string;}

  public function GetUser ()

  {return $this->user;}




}

$Account_GitHub= new User_real('Espedit | espedito.esposito1.1@gmail.com');

if($Account_GitHub instanceof user)
{

  echo '<br> Object is part of user interface';
}
else{

  echo'<br> WARNING: Object is not part of Interface ';
}

echo'<br><br>';

class Password_real extends User_real

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

$Account= new Password_real('Mrx','Cv&bm');

printf('%s-',$Account->GetUser());printf('%s',$Account->Getpassword());


echo '<br><br>';


Class Library extends PrintClass

{

 public function control_string () :bool
 {return true;}


}




$shelfletterA= new Library();

$shelfletterA->add_whatever('Robin Hood');

echo $shelfletterA->print_whatever(); echo '&nbsp;';
 echo ($shelfletterA->control_string() ? '  add-string=OK!' : 'add-string=Failure');

 echo '<br><br>';

Class Test implements StandardInterface


{
       protected $added;

   public function Add(string $text)

   {
      $this->added=$text;


   }

   public function Get ():string
   {return $this->added;}


}


$object= new Test(); $object->Add('Test'); var_dump($object->Get());


echo '<br><br>';



class Elab_Arr implements AdvancedInterface

{
        protected $arr;

   public function AddArr($arr)

   {
      $this->arr=$arr;


   }




   public function GetArr  ()

  {return $this->arr;}






}



$array=new Elab_Arr();


$equal=array(4,8,2,10,12);



$array->AddArr($equal);



print_r($array->GetArr());  echo '&nbsp;&nbsp;';

echo '<br><btr>';

 echo Entities::ViewEntites();

 $read_obj= new Entities();

 echo '<br>';$read_obj->ViewEntities_Propherty ();



 echo '<br><br>';

 class First_lead extends First
 {

public   static function who ()

   {echo __CLASS__;}


  public static function call ()

   {static::who();}


 }

 class Second_ extends First_lead
 {

public   static function who ()

   {echo __CLASS__;}
 }


echo Second_::call();


echo '<br> <br>';

class Account
{use TraitGithub;}


$espGithub= new Account();
$espGithub->AddGithub('Espedit | espedito.esposito1.1@gmail.com');

printf("%s\n",$espGithub->GetGithub());


echo '<br><br>';

trait Alpha{

  public function Getfunc ()

  {return 'Alpha';}
}

trait Beta{

  public function Getfunc  ()

  {return'Beta';}
}


class UseTrait{

  use Alpha,Beta{Beta::Getfunc insteadof Alpha;}


}

$viewmethod=  new UseTrait();
echo  $viewmethod->Getfunc();

echo'<br><br>';

$test= new class{
public function log (){
 $msg='Anonymous Class';

 echo $msg;
}
};


$test->log();

echo'<br>';
