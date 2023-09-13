<!-- Task 7: Simple Calculator


Build a PHP calculator named simple_calculator.php that performs basic arithmetic operations. 
Provide input fields for two numbers and a dropdown to select the operation (addition, subtraction, multiplication, division). 
Display the result of the chosen operation.

Complete these tasks by writing PHP code that fulfills the requirements of each task. 
Feel free to enhance the tasks or add extra features if you'd like. 

This assignment will help you practice your PHP skills and apply the concepts you've learned. Good luck! -->


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simple Calculator</title>
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>

  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);  ?>" method="POST" class="container form-control text-center p-4 bg-light" style="margin-top: 300px;">
   <h4 class="pb-5">Simple Calculator</h4>
    <span>First Number</span>
    <input type="number" class="form-input " name="num1" required>
    <span>Second Number</span>
    <input type="number" class="form-input " name="num2" required>
    <select type="text" name="operator" class="form-select-sm">
      <option value="add">Addition</option>
      <option value="sub">Substraction</option>
      <option value="multi">Multiplication</option>
      <option value="div">Division</option>
    </select>
    <button type="submit" name="submit" class="btn btn-primary mx-2">Calculate</button>
    <h4 class="pt-5"> Result</h4>
    <?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{

if(isset($_POST['submit']))
{

  $num1 = htmlspecialchars($_POST['num1']);

  $num2 = htmlspecialchars($_POST['num2']);

  $submit= htmlspecialchars($_POST['operator']);

 

 if($submit=="add")
 {
  echo $num1+$num2;
 }
 else if($submit=="sub")
 {
  echo $num1-$num2;
 }
 else if($submit=="multi")
 {
  echo $num1*$num2;
 }
 else if($submit=="div")
 {
  echo $num1/$num2;
 }
 

}
}
  ?>
  </form>

</body>

</html>