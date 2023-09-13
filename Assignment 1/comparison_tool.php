<!-- Task 6: Comparison Tool


Develop a PHP tool named comparison_tool.php that compares two numbers and displays the larger one using the ternary operator. 
Create a form where the user can input two numbers. Use the ternary operator to determine the larger number and display the result.\\

Or, declare 2 variable numbers and use the ternary operator to determine the large number and display the result -->


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>

  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);  ?>" method="POST" class="form-control text-center p-4 bg-light" style="margin-top: 300px;">
   <h4 class="pb-5">Comparison Tool </h4>
    <span>First Number</span>
    <input type="number" class="form-input " name="num1">
    <span class="mx-3">Second Number</span>
    <input type="number" class="form-input " name="num2">
<br>
    <button type="submit" name="submit" class="btn btn-primary mx-2 m-4 ">Check for large number</button>
    <p class="mb-0"> Large Number is </p>
    <?php
if (isset($_POST['submit']))
{

  $num1 = htmlspecialchars($_POST['num1']);
  $num2= htmlspecialchars($_POST['num2']);

 
  echo ($num1>$num2)?"<br>".$num1:"<br>".$num2;
  
  
  
}
  ?>
  </form>

</body>

</html>