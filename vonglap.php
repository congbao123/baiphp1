<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      .square {
  
 
  width: 50px;
    
   
  height: 50px;
    
   
  background-color: red;
    
   
  display: inline-block;
    
   
  margin: 5px;
  }
  
  .clear {
    
   
  clear: both;
  }
    /* ô button */
    input[type="button"] {
  
 
  width: 100px;
    
   
  height: 40px;
    
   
  background-color: #007BFF; /* Blue color, you can change this */
    color: white;
    
   
  border: none;
    
   
  border-radius: 4px;
    
   
  margin: 5px;
    cursor: pointer;
  }  
  input[type="button"]:hover{
    background-color:red;
  }
    </style>
</head>
<body>
<?php 
  for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < 10; $j++) {
      echo "<input name='bao' type='button' id='bao{$i}{$j}' value='Button {$i}{$j}'/>";
    }
    echo "<br/>";
  }
?>
</body>
</html>