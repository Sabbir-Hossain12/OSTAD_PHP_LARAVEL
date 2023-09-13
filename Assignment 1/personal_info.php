 <!-- Task 1: Personal Information Page


Create a PHP file named personal_info.php that displays your personal information using variables 
and the echo statement. Include your name, age, country, and a brief introduction.  -->













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

<h3 class="text-center pt-2">Personal Information</h3>
 <div class="container p-4 mt-5" style="border: 4px solid black; ">
   <?php

    $name = "Sabbir";
    $age = 24;
    $country = "Bangladesh";
    $introduction = "I recently comepleted my bachelors on Computer Science and Engineering from North South University.From Childhood I am very passionate about technology and i want to contribute on this field.";

    echo "My Name is $name.";
    echo PHP_EOL;
    echo "I am $age years old.";
    echo PHP_EOL;
    echo "I am from $country.";
    echo PHP_EOL;
    echo "$introduction.";
    echo PHP_EOL;


    ?>

 </div>
 </body>

 </html>