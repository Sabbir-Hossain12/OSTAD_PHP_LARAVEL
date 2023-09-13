<!-- Task 3: Grade Calculator


Develop a PHP script named grade_calculator.php that computes the average of three test scores and determines the corresponding letter grade. 
Create a form where the user can input three test scores. Calculate the average and display it along with the corresponding grade (A, B, C, D, F).
Or, declare 3 variable test scores and calculate the average and display it along with the corresponding grade (A, B, C, D, F) -->


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
<!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>


<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="form-control text-center p-4" style="margin-top: 350px;">
<span> Number 1</span>
<input type="number" name="num1" required>
<br>
<span> Number 2</span>
<input type="number" name="num2" required>
<br>
<span> Number 3</span>
<input type="number" name="num3" required>
<br>
<button type="submit" name="submit" class="mb-3 btn btn-primary mt-4">Average and Grade</button>


<?php

if(isset($_POST['submit']))
{

  
  $num1= $_POST['num1'];
  $num2= $_POST['num2'];
  $num3= $_POST['num3'];

  $avg= ($num1+$num2+$num3)/3;
  echo "<h3>Average</h3>";
  echo $avg ."<br>";
  echo "<h3>Grade </h3>";
  


  if($avg>=90)
  {
    echo "A";
  }
  else if($avg>=80)
  {
    echo "B";  
  }
  else if($avg>=70)
  {
    echo "C";  
  }
  
  else if($avg>=60)
  {
    echo "D";  
  }
  else 
  {
    echo "F";  
  }
  


 
  
}

?>

</form>
 

</body>

</html>


