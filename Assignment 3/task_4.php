<!-- Task 4: Multidimensional Array


Create a multidimensional array called $studentGrades to store the grades of three students. 
Each student has grades for three subjects: Math, English, and Science.
 Write a PHP function which takes "$studentGrades" as an argument to calculate and print the average grade for each student. -->

<?php
$averageGrades = [];

// Created a Multidimensional Array based on condition
$studentGrades = [
  "student1" => ["Math" => 85, "English" => 65, "Science" => 75],
  "student2" => ["Math" => 95, "English" => 75, "Science" => 85],
  "student3" => ["Math" => 20, "English" => 40, "Science" => 50]


];

function gradeCalculate($studentGrades)
{
  // Calculate Grades
  foreach ($studentGrades as $student => $value) {

    $average = array_sum($value) / count($value);

    $averageGrades[$student] = $average;
  }
  //condition for printing grade based on average number
  $grade = "";
  foreach ($averageGrades as $student => $average) {

    if ($average >= 80 && $average <= 100) {
      $grade = "A+";
    } else if ($average >= 70) {
      $grade = "A";
    } else if ($average >= 60) {
      $grade = "B";
    } else if ($average >= 50) {
      $grade = "C";
    } else if ($average >= 40) {
      $grade = "D";
    } else if ($average < 40 && $average >= 0) {
      $grade = "F";
    }
    else
    {
      $grade = "invalid ";
    }
   
    echo "Average Grades for {$student} is {$grade}, \n";
  }
}

// call function

gradeCalculate($studentGrades);


?>