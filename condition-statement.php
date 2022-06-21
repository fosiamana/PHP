<?php
//function checkUserEligibilityToVote()
//{
  //  $age=18;
    //$name="Fosi ";
    //IF($age>=18)
//{
  //  echo $name ."you are eligible to vote";

//}
//else
//{
//echo $name ."you are not eligible to vote";
//}

//}
//invoke the function
//checkUserEligibilityToVote()

 {   $marks=78;
   if($marks>=80)
   {
    $grade= "A";
   }
   else if($marks>=75)
   {
    $grade ="A-";
   }

   else if($marks>=65)
   {
    $grade= "B+";
   }
   else if($marks>=60)
   {
    $grade= "B";
   }
   else if($marks>=55)
   {
    $grade ="B-";
   }
   else if($marks>=50)
   {
    $grade ="C+";
   }
  else{
    $grade= "FAILED";
  }

 echo  "your grade is ".$grade
 }
 
?>