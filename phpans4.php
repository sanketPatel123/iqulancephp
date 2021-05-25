
<?php
$array = array(1=>"abc",2=>"", 3=>"cde", 4=>null, "5"=>"abc");
echo "<h2>Original Array</h2>";
var_dump($array);
echo "<hr>";
 
// Defining a callback function
function myFilter($var){
    return ($var !== NULL && $var !== FALSE && $var !== "");
}
// Filtering the array
$result = array_filter($array, "myFilter");
echo "<h2>Filtered Array</h2>";     
print_r(array_keys($result));
?>  