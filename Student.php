<?php
class Student{
    public $id;
    public $name;
    public $course;
    public $age;

    public function __construct($id,$name,$course,$age){
        $this->id = $id;
        $this->name = $name;
        $this->course = $course;
        $this->age = $age;
        

    }
}


?>