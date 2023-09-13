<!-- Task 4: Even or Odd Checker


Build a PHP program called  that checks whether a given number is even or odd. Provide an input field where the user can enter a number. Display a message indicating whether the number is even or odd. -->




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
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="form-control text-center " style="margin-top: 300px;">
<span> Number </span>
<input type="number" name="num">
<button class="btn btn-primary " name="submit" type="submit">Check Number</button>

<?php 

if(isset($_POST['submit']))
{
  $num= htmlspecialchars($_POST['num']);
  
 echo PHP_EOL;
 if($num%2==0)
 {
  echo "<h5>EVEN NUMBER</h5>";
 }
 else
 echo "<h5>ODD NUMBER</h5>";

}

?>
</form>
</body>

</html>