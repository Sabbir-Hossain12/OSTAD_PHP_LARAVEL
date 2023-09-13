<!-- Task 2: Temperature Converter


Design a PHP program called temperature_converter.php that converts temperatures between Celsius and Fahrenheit.
Provide a form where the user can input a temperature value and select the conversion direction (Celsius to Fahrenheit or vice versa). Display the converted temperature.
Or, Declare 3 variable temperature values and select the conversion direction (Celsius to Fahrenheit or vice versa). Display the converted temperature. -->


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>temperature converter</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>

  <h3 class="text-center">Temperature Converter</h3>
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);   ?>" method="get" class="text-center form-control p-4 bg-light">
  
    <span>Select Scale</span>
    <select name="scale" class="form-select-sm">
      <option value="Celcius">Celcius to Farenheit</option>
      <option value="Farenheit">Farenheit to Celcius</option>
    </select>
    <br><br>
    <span> Temperature</span>
    <input type="text" name="temp" class="form-input" required>
    <button type="submit" name="submit" class="mb-4">Submit </button>


    
<?php

if (isset($_GET['submit'])) {
  $scale = $_GET['scale'];
  $temp = $_GET['temp'];

  if ($scale == "Celcius") {
    $cel_to_far = $temp * 9 / 5 + 32;
    echo "<h3>Result is </h3>" . $cel_to_far;
  } else {

    $far_to_cel = ($temp - 32) * 5 / 9;
    echo  "<h3>Result is </h3>" . $far_to_cel;
  }
}


?>

  </form>




</body>

</html>

