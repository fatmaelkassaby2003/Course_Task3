<?php

// To Do Que 11:
/*===================*/
$person = array("name" => "John", "age" => 30, "city" => "New York");

foreach ($person as $key => $value) {
    echo "$key: $value"."<br>";
}


echo"<br>";

// To Do Que 12:
/*===================*/

$sales = array("Jan" => 100, "Feb" => 200, "Mar" => 150);
$total = 0;

foreach ($sales as $month => $amount) {
    $total += $amount;
}

echo "Total Sales: $total"."<br>";


echo"<br>";

// To Do Que 13:
/*===================*/

$number = 8;

echo "Multiplication Table of $number:"."<br>";


for ($i = 1; $i <= 10; $i++) {
    $result = $number * $i;
    echo "$number x $i = $result"."<br>";
}



echo"<br>";

// To Do Que 14:
/*===================*/

$students =[
    ["name" => "John", "age" => 20, "grade" => "A"],
    ["name" => "Mary", "age" => 22, "grade" => "B"],
    ["name" => "Tom", "age" => 18, "grade" => "A"]
];
foreach ($students as $student) {
    echo "Student Information: "."<br>";
    foreach ($student as $key => $value) {
        echo ucfirst($key) . ": " . $value . "<br>"; //بتخلى اول حرف ال key capitial
    }

    echo "<br>";
}

echo"<br>";

// To Do Que 15:
/*===================*/
$number=1;
do 
{
    if($number%3==0)
    {
        echo $number."<br>";
    }
    $number++;
} while ($number <= 100);
echo"<br>";