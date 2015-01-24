
<?php
class User{
    public $name = null;
    public $fname = null;
    public $lname = null;

    function __construct($fname,$lname){
        $this->fname = $fname;
        $this->lname = $lname;

    }

   public function getFullname()
    {
        return $this-> $fname. " " .$this-> $lname;
    }


 function  __destruct()
{
//echo "hello";
//echo  "<br />";

}
}
$arif=new User('arif','hasan');
$fahad=new User('fahad');
$mukta=new User('mukta');




//var_dump($arif);
//var_dump($fahad);
//var_dump($mukta);
echo $arif-> getFullname();
?>
