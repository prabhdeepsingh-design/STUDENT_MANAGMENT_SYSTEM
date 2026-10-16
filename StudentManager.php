<?php
require_once "Student.php";
class StudentManager{
    public $student=[];


    public function addStudent($student){
        foreach($this->student as $existingstudent){
            if($student->id==$existingstudent->id){
                echo "all ready exist".PHP_EOL;
                return;
            }
        }
        $this->student[]=$student;
        echo "Student details added successfully".PHP_EOL;
    }
    public function displayStudents()
    {
        if(empty($this->student)){
            echo "NO STUDENT FOUND".PHP_EOL;
        }else{foreach($this->student as $student)
            {
            echo "Student ID: ".$student->id .PHP_EOL;
            echo "Student Name: ".$student->name .PHP_EOL;  
            echo "Student Age: ".$student->age .PHP_EOL;
            echo "Student Course: ".$student->course .PHP_EOL;
            }
        
        
        }
    }   
    
public function findStudent($id) {
    foreach ($this->student as $student) {
        if ($student->id == $id) {
            echo "Student Found!" . PHP_EOL;
            echo "Student ID: " . $student->id . PHP_EOL;
            echo "Student Name: " . $student->name . PHP_EOL;
            echo "Student Age: " . $student->age . PHP_EOL;
            echo "Student Course: " . $student->course . PHP_EOL;
            return;
        }
    }

    echo "Student not found!" . PHP_EOL;
}
 
    

}
?>