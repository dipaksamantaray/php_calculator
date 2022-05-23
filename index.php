<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculator</title>
  <link rel="stylesheet" href="style.css"/>
</head>
<body>
  <div class="maindiv">
  <div class="vertical"> </div>
   <div class="left">
    
     <h2>Php <br/>Calculator</h2>
</div>
<div class="right">
  <form method="POST">
    <input class= "input" type = "text" name= "num1" placeholder="ENTER NUMBER"/>
    <hr/>
</br>
    <input class= "input" type = "text" name = "num2" placeholder="ENTER NUMBER"/>
    <hr/>
    </br>
    <div class="selectStyle">
   <select name="operation">
    <option  value = "add">Add</option> 
     <option value = "sub">Sub</option> 
     <option value = "mult">Mult</option> 
     <option value = "div">Div</option> 
</select>
</div>
</br>
<input class="input1" value="submit" type = "submit" placeholder="submit" name="submit"/>
</form>
<div class="paragraph">
  <p>
    <?php
    if(isset($_POST["submit"])){
      $num1 = $_POST["num1"];
      $num2 = $_POST["num2"];
      
      $operation = $_POST["operation"];
      switch($operation){
        case "add":$sum = $num1 + $num2;
        echo "the sum of two number is {$sum}";
        break;
        case "sub":$sub = $num1 - $num2;
        echo "the sub of two number is {$sub}";
        break;
        
        case "mult":$mult = $num1 * $num2;
        echo "the mult of two number is {$mult}";
        break;
        case "div":$div = $num1 / $num2;
        echo "the div of two number is {$div}";
        break;
        
        default:echo"plz enter the valid  key";

      }
    }
    
    
    ?>
</p>
</div>

</div>


</div>

</body>
</html>