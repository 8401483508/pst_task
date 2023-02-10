<?php
$title = "A simple CRUD app";
include '../layout/header.php';

?>
<form method="post" action="">
    <input type="text" name="fname" placeholder="First name" required >
    <input type="text" name="lname" placeholder="Last name" required >
    <input type="text" name="city" placeholder="City" required >
<select name="groupid" id="">
    <option value="BBCAP22"> BBCAP22 </option>
    <option value="BBCAP21"> BBCAP21 </option>
    <option value="BBCAP20"> BBCAP20 </option>
</select>
<input type="submit" value="submit" name="submit">
</form>
<?php
if(isset($_POST['submit'])){
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $city = $_POST["city"];
    $groupid = $_POST["groupid"];
    include "db.php";
    $sql = "insert into Studentinfo (fname,lname,city,groupid)
    values('$fname','$lname','$city','$groupid')";
    
    if($conn ->query($sql) === TRUE){
        echo "Your Information is added successfully";
    }
    else{
        echo "Error:" . $conn->error;
    }
}
?>
<?php
$title = "A simple CRUD app";
include '../layout/footer.php';

?>