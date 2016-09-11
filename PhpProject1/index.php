<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include('student.php');
        
        /* create an array to store the students information */
        $students = array();
        
        /* add students information in students array */
        $first = new Student();
        $first->surname = "Doe";
        $first->first_name = "John";
        $first->add_email('home', 'john@doe.com');
        $first->add_email('work', 'jdoe@mcdonalds.com');
        $first->add_grade(65);
        $first->add_grade(75);
        $first->add_grade(55);
        $students[$first->first_name.$first->surname] = $first;
        
        $second = new Student();
        $second->surname = "Einstein";
        $second->first_name = "Albert";
        $second->add_email('home', 'albert@braniacs.com');
        $second->add_email('work1', 'a_einstein@bcit.ca');
        $second->add_email('work2', 'albert@physics.mit.edu');
        $second->add_grade(95);
        $second->add_grade(80);
        $second->add_grade(50);
        $students[$second->first_name.$second->surname] = $second;
        
        /* add my information in the array */
        $third = new Student();
        $third->surname = "Zhang";
        $third->first_name = "Alex";
        $third->add_email('home', 'zyf1014@hotmail.com');
        $third->add_email('work', 'yzhang312@mcdonalds.com');
        $third->add_grade(95);
        $third->add_grade(95);
        $third->add_grade(92);
        $students[$third->first_name.$third->surname] = $third;
        
        /* sort students by firstname+lastname alphabetically */
        ksort($students); // one of the many sort functions 
        
        /* display the sort result */
        foreach ($students as $student){
            echo '-------------------------------------------';
            echo $student->toString();
        }    
        
        ?> 
    </body>
</html>
