<!-- 
  I certify that this submission is my own original work.
  Devon A. Hubbard
  R02032853
 -->
<html>

<head>
  <title>BCS350 Assignment 2 -- Devon Hubbard</title>
</head>

<body>
  <fieldset>BCS350 Assignment 2 -- Devon Hubbard</fieldset>
  </br>

  <?php

  if (isset($_POST['txtDoc'])) {
    $txtDoc = $_POST['txtDoc'];
  }

  //2. Constant for txtDoc, that changes all lowercase letters to uppercase
  define("TXT_TO_UPPER", strtoupper($txtDoc));

  // 1. Display text document the user entered
  echo 'The document you entered: <br>';
  echo "<br>";
  echo '<div style="border: 1px solid #000000; padding: 0.5em; inline-size: fit-content;
        writing-mode: vertical;">'; //start of div. Puts 
  echo $txtDoc;
  echo '</div><br>'; //end of div
  echo "<br>";
  echo letterCount(TXT_TO_UPPER, "A"); // test letterCount()

  // 3. Define a function letterCount
  function letterCount($str, $l) {
    $size = strlen($str);
    $count = 0;
    for($i = 0; $i < $size; $i++) {
      if($str[$i] == $l) {
        $count++;
      }
    }
    return $count;
  }

  /* define("A_BASE_COST", 19.95);
  define("A_HOURS_GRANTED", 200);
  define("A_OVER_FEE", 0.40);
  define("B_BASE_COST", 29.95);
  define("B_HOURS_GRANTED", 300);
  define("B_OVER_FEE", 0.35);
  define("C_BASE_COST", 39.95);
  define("C_HOURS_GRANTED", 2147483647);
  define("C_OVER_FEE", 0);

  $costA = calculateCost($hours, A_BASE_COST, A_HOURS_GRANTED, A_OVER_FEE);
  $costB = calculateCost($hours, B_BASE_COST, B_HOURS_GRANTED, B_OVER_FEE);
  $costC = calculateCost($hours, C_BASE_COST, C_HOURS_GRANTED, C_OVER_FEE);

  switch ($package) {
    case "A":
    case 'a':
      if (isNegative($hours) != true) {
        printf("Your Monthly charge is $%.2f", $costA);
        echo "<br>";
        echo "<br>";
        if ($hours > A_HOURS_GRANTED) { //hours is greater than 200
          printf("By Switching to Package B you would save $%.2f", compare($costA, $costB));
          echo "<br>";
          printf("By Switching to Package C you would save $%.2f", compare($costA, $costC));
        } elseif ($hours <= A_HOURS_GRANTED) { //hours is less than or equal to 200
          echo 'You chose the best package! <br>';
        }
      } else {
        echo 'The number of hours must be non-negative. Please return to the previous page and enter a valid value. <br>';
      }
      break;
    case 'B':
    case 'b':
      if (isNegative($hours) != true) {
        printf("Your Monthly charge is $%.2f", $costB);
        echo "<br>";
        echo "<br>";
        if ($hours < B_HOURS_GRANTED) { //hours is less than 300
          if ($costA < $costB) {
            printf("By Switching to Package A you would save $%.2f", compare($costB, $costA));
          }
        } elseif ($hours >= B_HOURS_GRANTED) { //hours is greater than or equal to 300
          if ($costC < $costB) {
            printf("By Switching to Package C you would save $%.2f", compare($costB, $costC));
          } elseif ($costC > $costB) {
            echo 'You chose the best package! <br>';
          }
        }
      } else {
        echo 'The number of hours must be non-negative. Please return to the previous page and enter a valid value. <br>';
      }
      break;
    case 'C':
    case 'c':
      if (isNegative($hours) != true) {
        printf("Your Monthly charge is $%.2f", $costC);
        echo "<br>";
        echo "<br>";
        if ($hours <= B_HOURS_GRANTED) { //hours is less than or equal to 300
          if ($costA < $costB) {
            printf("By Switching to Package A you would save $%.2f", compare($costC, $costA));
          } elseif ($costA > $costB) {
            printf("By Switching to Package B you would save $%.2f", compare($costC, $costB));
          }
        } elseif ($hours > B_HOURS_GRANTED) { //hours is greater than 300
          echo 'You chose the best package! <br>';
        }
      } else {
        echo 'The number of hours must be non-negative. Please return to the previous page and enter a valid value. <br>';
      }
      break;
    default:
      echo 'Wrong package entered. Please return to the previous page and enter a valid package name. <br>';
      if (isNegative($hours) == true) {
        echo 'The number of hours must be non-negative. Please return to the previous page and enter a valid value. <br>';
      }
      break;
  }

  function isNegative($input)
  {
    $check = false;
    $check = ($input >= 0) ? false : true;
    return $check;
  }

  function calculateCost($hrsUsed, $baseCost, $hrsGranted, $fee)
  {
    $cost = $baseCost;

    if ($hrsUsed > $hrsGranted) {
      $cost += ($hrsUsed - $hrsGranted) * $fee;
    } elseif ($hrsUsed <= $hrsGranted && $hrsUsed >= 0) {
      $cost = $baseCost;
    }

    return $cost;
  }

  function compare($currentCost, $other)
  {
    return $currentCost - $other;
  } */


  ?>
</body>

</html>