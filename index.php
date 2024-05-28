<?php
$insert=false;
if(isset($_POST['name'])){

    // Set connection variables
$server="localhost";
$username="root";
$password="";
 
// Create a database connection
$con= mysqli_connect($server, $username, $password);

// Check for connection success
if(!$con){
    die("connection to this database failed due to". mysqli_connect_error());
}

// collect post variables
$name=$_POST['name'];
$roll=$_POST['roll'];
$email=$_POST['email'];
$dept=$_POST['dept'];
$perc10=$_POST['perc10'];
$perc12=$_POST['perc12'];
$percBTech=$_POST['percBTech'];
$media=$_POST['media'];

$sql= "INSERT INTO `campusinginfo_2024`.`campus_24` (`name`, `roll`, `email`, `dept`, `perc10`, `perc12`,
 `percBTech`, `resume`, `dt`)  VALUES ('$name', '$roll', '$email', '$dept', '$perc10',
  '$perc12', '$percBTech','$media', current_timestamp());";

// Execute the query
 if($con->query($sql)== true){

    // flag for successful insertion
    $insert=true;
 }
 else{
    echo "ERROR: $sql <br> $con->error";

 }

 // Close the database connection
 $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campusing Details</title>
    <link rel="stylesheet" href="index.css">

</head>
<body>
    <img class="aec" src="aec.webp" alt="aec"/>
    <div class="container">
        <h1>Welcome to Campus Hiring 2024</h1>
        <p class="top">Enter your details to begin your placement journey</p>
        <?php
        if($insert==true){
echo "<p class='submitMsg'>Thanks for submitting the form. Your response has been saved.</p>";
        }
?>

        <form action="index.php" method="post">
           
            <div class="contain">
            <p class="mid required">Name</p>
            <input type="text" name="name" id="name" placeholder="Enter your name">
        </div>

        <div class="contain">
            <p class="mid required">University Roll No.</p>
            <input type="number" name="roll" id="roll" placeholder="Enter your University Roll no.">
        </div>

        <div class="contain">
            <p class="mid required">Email</p>
            <input type="email" name="email" id="email" placeholder="Enter your Email-Id">
        </div>

        <div class="contain">
            <p class="mid required">Department</p> </div>
            <input type="radio" id="CSE/IT" name="dept" value="CSE/IT">
            <label for="CSE/IT">CSE/IT</label>
            <input type="radio" id="AIML" name="dept" value="AIML">
            <label for="AIML">AIML</label>
            <input type="radio" id="CSBS" name="dept" value="CSBS">
            <label for="CSBS">CSBS</label>
            <input type="radio" id="ECE" name="dept" value="ECE">
            <label for="ECE">ECE</label>
       

        <div class="contain">
            <p class="mid required">10th percentage (don't use %)</p>
            <input type="number" name="perc10" id="perc10">
        </div>

        <div class="contain">
            <p class="mid required">12th percentage (don't use %)</p>
            <input type="number" name="perc12" id="perc12">
            </div>

            <div class="contain">
            <p class="mid required">B-Tech percentage (don't use %)</p>
            <input type="number" name="percBTech" id="percBTech">
            </div>

            <div class="contain">
                <p class="mid required">Resume</p>
                <input type="file" name="media" id="media"><br>
            </div>

            <div class="button-container">
                <button class="btn" value="submit">SUBMIT</button>
            </div>
        </form>
    </div>
          
    <!-- <script src="index.js"></script> -->
    
</body>
</html>
