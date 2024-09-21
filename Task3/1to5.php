<?php
// To Do Que 1:
/*===================*/
$counter=1;
while ($counter <= 10) 
{
    if ($counter==10) 
    {
        echo $counter;
    }
    else
    {
    echo $counter.'-';
    }
    $counter++;
}

echo"<br>";

// To Do Que 2:
/*===================*/

$numbers = [ 1 , 1 ,  1 , 2 , 2, 3 ,6 , 7 , 7 ,4 ,5,5 ] ;
$new_num=[];
for ($i=0; $i <count($numbers) ; $i++) 
{ 
    if (!in_array($numbers[$i],$new_num)) 
    {
        $new_num[]=$numbers[$i];
    }
}
sort($new_num);
echo"<pre>";
print_r($new_num);
echo"</pre>";
echo"<br>";

// To Do Que 3:
/*===================*/
$str="eraasoft";
$chara="r";
$count=0;
$i=0;//=======> counter in string

while ($i<strlen($str))
{
    if($str[$i]==$chara)
    {
        $count++;
        echo"The character $chara appears $count times in the text $str.";
    }
    $i++;
}
echo"<br>";

// To Do Que 4:
/*===================*/
for ($i=1; $i <=50 ; $i++) 
{ 
    if ($i%3===0) 
    {
        if($i%5===0)
        {
            echo "FizzBuzz"."<br>";
        }
        else
        {
        echo "Fizz"."<br>";
        }
    }
    elseif ($i%5===0) 
    {
        
        if($i%3===0)
        {
            echo "FizzBuzz"."<br>";
        }
        else
        {
             echo "Buzz"."<br>";
        }
    }
    else
    {
        echo $i."<br>";
    }

}

echo"<br>";


// To Do Que 5:
/*===================*/
$total=0;
for ($i=0; $i <=30 ; $i++) 
{ 
  $total+=$i;
}
echo "The sum of the numbers 0 to 30 is ".$total;

echo"<br>";