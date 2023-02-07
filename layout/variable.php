<?php include "header.php" ?>

<h3> Exercise 3. In-class Task Variable & Operators (Variable.php)</h3>
<p> Create a simple html form to get Firstname and Lastname from the user and use echo echo statement to print using <h3> tag: Hello …., You are welcome to my site.</p>
<form action="action.php" method="post">
    <div class="row">

<div class="col">    
First name: <input type="text" name="fname" required placeholder="Firstname">
</div>
<div class="col"> 
Last name: <input type="text" name="lname" required placeholder="Lastname"> 
</div>

<div class="col">
Birthdate: <input type="Date" name="BDate"required placeholder="Birthdate"> 
</div>
<div class="col">
select fav color: <input type="color" name="color"required placeholder="blue">
</div>
<input type="submit" value="submit">

</form>
<h3> 3. Prepare a simple html table and apply bootstrap style to the table. You may use the same table that you did in 3.5.
</h3>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>PRASHANT</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>HARDIK</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>PARTH</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
<h3> 4.Write a PHP script with two string variables. Assign any text to these variables. Join them together.  Print the length of the string. (Hint: string function)</h3>

<?php

echo "Hello world!<br>";
echo "I'm about to learn PHP!<br>";
?>
<h3> 5.Write a script to add up the numbers: 298, 234, 46. Use variables to store these numbers and echo statement to output your answer.
</h3>

<?php
$a = 298;
$b = 234;
$c = 46;

$d = $a + $b + $c;
echo "\n sum is:" . $d;
?>

<h3> 6. Write a PHP script to detect the browser being used to view your pages. (Use predefined variables: $_SERVER). 
</h3>
<?php

echo $_SERVER["HTTP_USER_AGENT"] . "<br>";
?>

<h3> 7. Write a PHP script in the footer section of your universal footer just below the Copyright information to display the last modification time of a file. (Hint: Use predefined variable $_SERVER, basename function  to get the filename , filetime function to get the last modified time & date function to print the date and time)
</h3>

<?php
$name = $_SERVER['PHP_SELF'];
$filename = basename($name);
echo "$filename lastmodified: " . date ("F d Y H:i:s.",filemtime($filename));
?>

<?php include "footer.php" ?>