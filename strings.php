<?php
$str= "riya kumari";
echo $str;
$len=strlen($str);
echo "<br>The length of this string is ".$len;
echo "<br>The number of words in this string is ".str_word_count($str);
echo "<br> The reverse of the string is ".strrev($str);
echo "<br> The position of kumari in the string is ".strpos($str, 'kumari');
echo "<br> The replaced string is ".str_replace('kumari', 'singh', $str);
?>