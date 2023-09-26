<!-- Task 4: Multidimensional Array


Create a multidimensional array called $studentGrades to store the grades of three students. 
Each student has grades for three subjects: Math, English, and Science.
 Write a PHP function which takes "$studentGrades" as an argument to calculate and print the average grade for each student. -->

<?php
$averageGrades = [];

$studentGrades = [
  "student1" => ["Math" => 85, "English" => 65, "Science" => 75],
  "student2" => ["Math" => 95, "English" => 75, "Science" => 85],
  "student3" => ["Math" => 85, "English" => 70, "Science" => 85]


];

function gradeCalculate($studentGrades)
{
  // Calculate Grades
  foreach ($studentGrades as $student => $value) {

    $average = array_sum($value) / count($value);

    $averageGrades[$student] = $average;
  }
  // print grade
  $grade="";
  foreach ($averageGrades as $student => $average) {

    if ($average >= 80) {
      $grade = "A+";
    } else if ($average >= 70) {
      $grade = "A";
    } else if ($average >= 60) {
      $grade = "B";
    } else if ($average >= 50) {
      $grade = "C";
    } else if ($average >= 40) {
      $grade = "D";
    } else {
      $grade = "F";
    }
    echo "Average Numbers and Grades for {$student} are {$average}  {$grade}, \n";
  }
}

// call function

gradeCalculate($studentGrades);


?>