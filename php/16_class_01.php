<?php

class employee
{
    public $name;
    public $position;

    function __construct($name,$position)
    {
        $this->name = $name;
        $this->position = $position;
    }

    function showDetails()
    {
        echo $this->name. " : \n";
        echo "Your Position : " . $this->position;
    }
}

$employee_obj=new employee("Raj","Developer");
$employee_obj->showDetails();

?>