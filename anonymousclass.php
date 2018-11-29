<?php

class C {
    private $member;

    public function method() {
        return new class {
            public function method() {
                return $this->member;
            }
        };
    }
}


$view= new C();

var_dump($view->method());

echo '<br><br>';

$object=(new class {

private $element;

public function  LeaveMethod ()

{return $this->element; }

});

var_dump($object);

echo'<br><br>';








 ?>
