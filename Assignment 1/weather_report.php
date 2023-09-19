<!-- Task 5: Weather Report


Create a PHP script named weather_report.php that provides weather information based on temperature.
 Use a variable to store the temperature. Depending on the temperature range, display messages like "It's freezing!", "It's cool.", or "It's warm." -->


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

  <form action="" method="POST" class="form-control text-center p-4 bg-light" style="margin-top: 300px;">
   <h4 class="pb-5">Weather Report </h4>
    <span>Enter Temparature</span>
    <input type="number" class="form-input " name="tempa">
    <button type="submit" name="submit" class="btn btn-primary mx-2">Check Weather</button>
    
    <?php
if (isset($_POST['submit']))
{

  $temp = htmlspecialchars($_POST['tempa']);

  // echo $temp;
  
  
  if ($temp <= 0) {
    echo "<br>its Freezing !";
  } else if ($temp <= 10) {
    echo "<br>Its very cold";
  } else if ($temp <= 20) {
    echo "<br>Its cool";
  } else if ($temp <= 30) {
    echo "<br>Its warm";
  } else {
    echo "<br>its Hot!";
  }
}
  ?>
  </form>

</body>

</html>