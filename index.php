<?php


require_once "Student.php";
require_once  "StudentManager.php";
$manager=new StudentManager();
//$s1 = new Student(1, "Prabhdeep", 19, "ECE");
//$s2 = new Student(2, "khata", 20, "ECE");
function details(){
    echo "NAME :";
    $n=trim(fgets(STDIN));
    echo "ID :";
    $i=(int)trim(fgets(STDIN));
    echo "COURSE :";
    $c=trim(fgets(STDIN));
    echo "AGE :";
    $a=(int)trim(fgets(STDIN));
   

    $stu =new Student($i, $n, $c, $a);
    return $stu;
}

$choice ="";

while($choice!=4){
    echo "1.enter student details".PHP_EOL;
    echo "2.Display all  students".PHP_EOL;
    echo "3.FIND STUDENT".PHP_EOL;
    echo "4.EXIT ".PHP_EOL;
    $choice = trim(fgets(STDIN));
    if($choice==1){
        $manager->addStudent(details());
       
    }
    elseif($choice==2){
        $manager->displayStudents();}
    elseif($choice==3){
        echo "Enter student ID to find: ";
        $id = (int) trim(fgets(STDIN));
        $manager->findStudent($id);
    }
    elseif($choice==4){echo "EXITING THE PROGRAM ".PHP_EOL;}
    else{echo "Invalid choice"; }
}

