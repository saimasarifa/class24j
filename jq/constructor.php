

<?php
/*class User{
    public $name='not assained';
}
$arif=new User();
$fahad=new User();
//assining a value to properties of an object
$arif->name='arif';

var_dump($arif);
var_dump($fahad);*/



class User {
    public $name=null;

    function __construct($name){
        $this->name=$name;
    }
}
$arif=new User('arif');
$fahad=new User('fahad');
$mukta=new User('mukta');
$mukta=new User('mukta');



var_dump($arif);
var_dump($fahad);
var_dump($mukta);
?>



















