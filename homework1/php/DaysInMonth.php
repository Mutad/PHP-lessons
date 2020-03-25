<?php

$isLeapYear = empty($_GET['leapYear']) ? false : true;

if (empty($_GET['month']))
  echo "month is empty";
else{
  $month = $_GET['month'];


  $daysInMonth = 31 - (($month == 2)? 3-$isLeapYear : (($month - 1) % 7 % 2));

  echo "Days in month {$month} is: ".$daysInMonth;
}
