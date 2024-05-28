<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP_Project
    </title>
</head>
<style>
    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
    }
    .container{
        max-width:80%;
        background-color:rgb(228, 195, 195);
        margin:auto;
        margin-top:10px;
        padding:23px;
    }
</style>
<body>
    <div class="container">
        <h1>Lets learn about PHP</h1>
        <?php
$age=14;
if($age>18){
    echo "You are an adult";
    echo "<br>";
}
else if($age>10 && $age<18){
    echo "You are too younger";
    echo "<br>";
}
else{
    echo "You are not an adult";
    echo "<br>";
}

// Arrays in php
$arr=array(1,2,3,4, "apple");
echo $arr[3];
echo "<br>";
echo "The size of Array is ";
echo count($arr);
echo "<br>";

/*   <Table border="1 solid black">
  <?php
Loops in php
$nums=[1,2,3,4,5];
$cnt=1;
for($i=0;$i<count($nums);$i++){
    echo "<tr>";
echo "<td>";
echo "3 * ";
echo  $cnt;
echo " = ";
echo $nums[$i]*3;
echo "<br>";
echo"</td>";
echo "<tr/>";
$cnt++;
 }
?>
</Table>  */

        // Loops- 
        // While loop
$a=0;
while($a<10){
    echo "<br>The value of a is ";
    echo $a;
    $a++;
}

// For loop
for($i=0;$i<10;$i++){
    echo "<br>The value of i is ";
    echo $i;
}

// Do while loop-
$x=1;
do{
    echo "<br>The value of x is ";
    echo $x;
    $x++;
}
while($x<10);

$temp=0;
while($temp<count($arr)){
    echo "<br>";
echo $arr[$temp];
$temp++;
}

// foreach loop-
foreach ($arr as $value) {
    echo "<br>The value is ";
    echo $value;
}

// function
function print_5(){
    echo "<br>FIVE";
}
print_5();

function print_num($number){
    echo "<br>The value is ";
    echo $number;
}

print_num(55);

?>
    </div>
</body>
</html>