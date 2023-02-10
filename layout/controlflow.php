<?php include "header.php"  ?>

<h3>1.Write a script that gets the current month and prints one of the following responses, depending on whether it's August or not:

</h3>
<?php
$a = "August";

  $month=date("F");
  if ($month=="$a") {
    echo "It's $a, so it's still holiday.";
  }
  else {
    echo "Not August, this is $month so I don't have any holidays";
  }
?> 

<h3>2.Assign colour red to a variable name $color and check to print one the following responses (if else statement)
</h3>
<?php


$color = "red";
if ($color=="red") {
    echo "The color is red.";
  }
  else {
    echo "The color is not red.";
  }

?> 

<h3>3.Write a program to grade students based on their total score for a subject. Use variable to hold the total score. The grading scheme is: 
</h3>
<?php

$a= 60;

if ($a>80) {
    echo "Excellent ";
  }
  else if($a>70) {
    echo "Great";
  }
  else if($a>60) {
    echo "Great ";
  }
  else if($a>50) {
    echo "Pass ";
  }
  else if($a<50) {
    echo "Fail";
  }

?> 
<h3>4.Write a program to get inputs (age and name) from the user and based on their age, decide if he/she is eligible for voting. (18 or more than 18 years is eligible for voting,)
</h3>

<form action="action2.php" method="post">
    <div class="row">
        <div class="col">
        <input type="text" name="name" required placeholder="Name" class="form-control" >  
        </div>
        <div class="col">
        <input type="number" name="age" required placeholder="age" class="form-control" >  
        </div>
        </div>

       
    <input type="submit" value="submit">
    
</form>



<h3>5. you used $_SERVER['HTTP_USER_AGENT']; to get the browser name. 
Use Switch statement with strops function to print the name of the browser as below: 
If someone is using Chrome it should print, you are using Goolge Chrome….
</h3>

<?php

if(strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') ) 
		echo 'Internet explorer';

elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Firefox') ) 
		echo 'Mozilla Firefox';
		
		elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome') ) 
			echo 'Google Chrome';
			
			else 
				echo 'Something else';
?>




<?php include "footer.php" ?> 