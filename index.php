<?php


  if(ctype_digit($input)){
    processor($input);
  }
  else{
    showWarning();
  }

}

function processor($num){
  do{
    if($num === palindromeChecker($num)){
      createResult($num);
    }

  }while($num >= 9 && $num < /*PHP_INT_MAX_VALUE*/);
}

function palindromeChecker($num){

}

function createResult($palindrome){

}

function showWarning(){
  echo "<p> ERROR: Incorrect Input.  Please Enter a Number</p>";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Palindrome Practice</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <header>
    <h1>Numeric Palindrome Practice</h1>
    <p>Program Instructions:</p>
    <ol>
      <li>User will provide a single number as input</li>
      <li>Processer will find the nearest palindrome to that input</li>
      <li>The palindrome, and its distance away from the initial output will be displayed</li>
    </ol>
  </header>
  <main>
    <form method="post">
      <label for="num">Enter Number Here:</label><br>
      <input type="text" id="num" name="num">
      <input type="submit">
    </form>
    <div class="result">
      <?php
        if(isset($_POST['num'])){
          validateInput($_POST['num']);
        }
      ?>
    </div>
  </main>
</body>
</html>
