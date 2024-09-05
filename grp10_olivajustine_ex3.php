<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
<style>
  * {
     margin: 0; 
     padding: 0; 
  }
  body {
    width: 100%;
    height: 100%;
    font-family: Arial;
    position: relative;
    background-color: #000;
  }
  .container {
    width: 400px;
    height: 400px;
    border: 1px solid #000;
    border-color: red;
    margin: auto;
    text-align: center;
    line-height: 50px;

    padding-top: 120px;
    margin-top: 150px;

    color: white;
  }
</style>

</head>
<body>



<div class = "container">
<?php

  echo file_exists("sample.txt"); // This is to check if a file is existing.
  echo "</br>"; //add a new line
  echo file_put_contents("sample.txt", "Hello World. Coding Fun!"); // This is to put a data (Hello World. Coding!) in sample.txt file.
  echo "</br>"; 
  echo file_get_contents("sample.txt"); // This is to render or display the data or text in sample.txt file.
  echo "</br>"; 
  print_r(file("sample.txt")); // It reads the sample.txt file and return it as an array
  echo "</br>"; 
  echo "</br>"; 
  echo "</br>"; 

  ?>
  
</div>

</body>
</html>