<?php
$title = "Update your info";
include '../layout/header.php';
include 'db.php';


$a=$_GET['id'];
$result = mysqli_query($conn,"Select * from Studentinfo where id='$a'");
$raw=mysqli_fetch_array($result);?>

<h2> Update your information below </h2>
<form name="update" method="post" action="">
    <input type="text" name="fname" placeholder="First name" required value="<?php echo $raw['fname'];?>" ><br.<br>
    <input type="text" name="lname" placeholder="Last name" required value="<?php echo $raw['lname'];?>" ><br.<br>>
    <input type="text" name="city" placeholder="City" required value="<?php echo $raw['city'];?>" ><br.<br>
<select name="groupid" value="<?php echo $row['groupid'];?>">
    <option value="BBCAP22"> BBCAP22 </option>
    <option value="BBCAP21"> BBCAP21 </option>
    <option value="BBCAP20"> BBCAP20 </option>
</select><br><br>
<input type="submit" value="Update your Info" name="Update"> <br><br>
<input type="submit" value="Delete your Info" name="Delete"> 
</form> 
<?php
if (isset($_POST['update'])){
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$city = $_POST['city'];
$groupid = $_POST['groupid'];
$query = mysqli_query($conn, "DELETE Studentinfo set fname='$fname',
lname='$lname',city='$city',groupid='$groupid' where id='$a'");
if($query){
    echo "<h2> Your information is deleted successfully</h2>";
}
else { echo "Record Not delete";}
}
include '../layout/footer.php';
?>


