<?php include "header.php";?>
<form action="" method="get">
<input type="number" placeholder="Enter your first number" name="num1" required>
<input type="number" placeholder="Enter your Second  number" name="num2" required> 
<select name="operator">
    <option value="add"> Add</option>  
    <option value="sub"> Substract</option> 
    <option value="mul"> Multiply</option>
    <option value="div"> Divide</option> 
</select>
<input type="submit" name="cal" value="calculate">    
</form>
<?php
if (isset($_GET["cal"])){
    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];
    $operator = $_GET["operator"];
switch($operator){
case "add":
$result = $num1 + $num2;
break;
case "sub":
$result = $num1 - $num2;
break;
case "mul":
$result = $num1 * $num2;
break;
case "div":
$result = $num1 / $num2;
break;
default:
$result = "error: you have not selected the correct operator";

            }
        }
        if (isset($result)){
            echo "<h2> result: $result </h2>";
        }
      
?>
<h3>1.  Write a php script to display courses as list. Use <li>
$courses=array("PHP", "HTML", "JavaScript", "CMS", "Project")</h3>
<?php

$courses = array("PHP", "HTML", "JavaScript", "CMS", "Project");
foreach ($courses as $c)
{
echo "$c, ";
}
sort($courses);
echo "<ul>";
foreach ($courses as $y)
{
echo "<li>$y</li>";
}
echo "</ul>";
?>
<h3>2.The unset() function is used to remove element from the array. The var_dump() function is used to dump information about a variable.  array_values() is an inbuilt function that returns all the values of an array and not the keys.
Delete an element from the array below:

</h3>
<?php

$courses = array("PHP", "HTML", "JavaScript", "CMS", "Project");
foreach ($courses as $c)
{
echo "$c, ";
    unset($courses[1]);
}
sort($courses);
echo "<ul>";
foreach ($courses as $y)
{
echo "<li>$y</li>";
}
echo "</ul>";
?>
<h3>3. Sort the following array 
$courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
</h3>

<?php
    $courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");

echo "a) ascending order sort by value <br>";
asort($courses);
foreach($courses as $x=>$x_value)
   {
   echo  $x_value;
   echo "<br>";
   }


echo "b) ascending order sort by Key<br>";
ksort($courses);
foreach($courses as $x=>$x_value)
   {
   echo  $x_value;
   echo "<br>";
   }


echo "c) descending order sort by Value<br>";
arsort($courses);
foreach($courses as $x=>$x_value)
   {
   echo  $x_value;
   echo "<br>";
   }


echo "d) descending order sort by Key<br>";
krsort($courses);
foreach($courses as $x=>$x_value)
   {
   echo  $x_value;
   echo "<br>";
   }
?>



<h3>4. Change the following array's all values to upper case.
</h3>

<?php
$courses=array("php", "html", "javascript", "cms", "project");
print_r( array_change_key_case($courses,CASE_UPPER));
?>

<?php
$input_array = array("FirSt" => 2, "SecOnd" => 5);
print_r(array_change_key_case($input_array, CASE_UPPER));
?>


<h3>5. List all your favorite colors and their hexadecimal equivalents. (associative arrays)
</h3>

<?php
$color['00000'] = "pink";
$color['11111'] = "yellow";
$color['22222'] = "red";
$color['33445'] = "Purple";
$color['12345'] = "blue";

foreach($color as $x=>$x_value){
    echo $x . "=>" . $x_value . "<br>";
}
?>

<h3>6. PHP script to calculate and display average temperature, five lowest and highest temperatures.
</h3>
<?php
$a = array(
    
    62,
    60,
    65,
    72,
    66,
    71,
    79,
    66,
    64,
    56,
    63,
    62,
    73,
    72,
    66,
    73,
    62,
    62,
    65,
    66,
    78,
    73,
    75,
    79,
    73
);
$sum=array_sum($a);
$count = count($a);
echo "Average temperature:" . $sum / $count;
sort($a);
for($i=0; $i<5; $i++){
    echo $a[$i] . "<br>";
}
rsort($a);
for($i=0;$i<5;$i++){
    echo $a[$i] . "<br>";
}

?>
<? include "footer.php"?>