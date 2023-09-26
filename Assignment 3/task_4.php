<!-- Task 4: Multidimensional Array


Create a multidimensional array called $studentGrades to store the grades of three students. 
Each student has grades for three subjects: Math, English, and Science.
 Write a PHP function which takes "$studentGrades" as an argument to calculate and print the average grade for each student. -->

<?php
$averageGrades = [];

$studentGrades = [
  "student1" => ["Math" => 85, "English" => 65, "Science" => 75],
  "student2" => ["Math" => 95, "English" => 75, "Science" => 85],
  "student3" => ["Math" => 75, "English" => 65, "Science" => 85]


];

function gradeCalculate($studentGrades)
{
  // Calculate Grades
  foreach ($studentGrades as $student => $value) {

    $average = array_sum($value) / count($value);

    $averageGrades[$student] = $average;
  }
  // print grade
  foreach ($averageGrades as $student => $average) {
    echo "Average Grades for $student is $average <br>";
  }
}

// call function

gradeCalculate($studentGrades);


?>