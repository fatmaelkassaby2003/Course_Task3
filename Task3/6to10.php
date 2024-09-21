<?php

// To Do Que 6:
/*===================*/
$numbers = [5, 15, -10, 100, 250, 0, 1];
function largest_number($numbers) 
{
    return max($numbers);
}
echo largest_number($numbers); 

echo"<br>";

// To Do Que 7:
/*===================*/

function smallest_number($numbers) 
{
    return min($numbers);
}
echo smallest_number($numbers); 
echo"<br>";

// To Do Que 8:
/*===================*/
$total=1;
for ($i=1; $i <= 4 ; $i++) 
{ 
  $total*=$i;
}  

echo "the factorial is 4 = ".$total;
echo"<br>";

// To Do Que 9:
/*===================*/
echo "The Even Numbers";
echo"<br>";
$number=1;
while ($number <= 15) 
{
   if ($number%2==0) 
   {
    echo $number."<br>";
   }
   $number++;
}

 echo"<br>";
 

// To Do Que 10:
/*===================*/
echo "The Odd Numbers";
echo"<br>";
$num1=1;
while ($num1 <= 15) 
{
   if ($num1%2 !== 0) 
   {
    echo $num1."<br>";
   }
   $num1++;
}
