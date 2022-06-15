<?php
// your code goes here 
// $myname = " Fosi ";
//  $finaloutput="My name is ".''.$myname;
//  echo $finaloutput;
// $num1= 1;
// $num2="1";
// $compare=$num1==$num2;
// echo $compare;
 

// //Arrays
// $students =array("Fosi","Emanuel","Amana","kevin", "Caleb" );
// echo $students[2];
// echo count ($students);
$programMarks =array("assignments" =>25, 
                        "CAT"=>20,
                      "attendance"=>8, 
                       "projects"=>45
                    );
echo "CAT:" .$programMarks["CAT"];

// Multidimentional Arrays
$webTechnologies = array( 
    'frontend' => array(' HTML ',' CSS ',' JS ',' Boostrap '),
     'backend'=>array('PHP','JS','Python','Java'),
     'database'=>array('mysql','postgresql','MangoDB')
);
echo $webTechnologies['frontend'][2];  //JS will be outputed
echo $webTechnologies['backend'][0]; 
echo $webTechnologies['database'][2];

?>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        