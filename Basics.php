<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Project</title>
</head>
<body>
    <div class="container">
        This is my first php website..
        <?php
        echo "<br>";
        echo "Hello world!";
        echo "<br>";
        $var1=30;
        $var2=30;
        echo "The value of variable1 + variable2 is ";
        echo $var1+$var2;
        echo "<br>";

        // Assignment Operators
        $newVar= $var1;
        echo "The value of new variable is ";
        echo $newVar;
        echo "<br>";
       echo var_dump(1==4);

       $myVar=(false) and (true);
       echo "<br>";
       echo var_dump($myVar);

       echo"<br>";
       $var=67;
       echo var_dump($var);
        ?>
    </div>
</body>
</html>