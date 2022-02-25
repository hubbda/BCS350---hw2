<!-- 
  I certify that this submission is my own original work.
  Devon A. Hubbard
  R02032853
 -->
<html>
<style>
  table,
  th,
  td {
    border: 1px solid black;
  }
</style>

<head>
  <title>BCS350 Assignment 2 -- Devon Hubbard</title>
</head>

<body>
  <fieldset>BCS350 Assignment 2 -- Devon Hubbard</fieldset>

  <h2>Frequency Analysis</h2>

  <?php

  if (isset($_POST['txtDoc'])) {
    $txtDoc = $_POST['txtDoc'];
  }

  // Constant for txtDoc, that changes all lowercase letters to uppercase
  define("TXT_TO_UPPER", strtoupper($txtDoc));

  // Display text document the user entered
  echo 'The document you entered: <br>';
  echo "<br>";
  echo '<div style="border: 1px solid #000000; padding: 0.5em; inline-size: fit-content;
        writing-mode: vertical;">'; //start of div. Puts 
  echo $txtDoc;
  echo '</div>'; //end of div
  echo "<br>";
  // echo letterCount(TXT_TO_UPPER, "A"); // test letterCount()

  $arrayLetters = range('A', 'Z'); //array for letters A - Z
  $arrayCount; //array for the occurance of each letter
  $arrayFreq; //array for the occurance of each letter as a percentage
  $totalLetters = 0;

  foreach ($arrayLetters as $value) {
    $arrayCount[] = letterCount(TXT_TO_UPPER, $value);
  }

  foreach ($arrayCount as $c) {
    $totalLetters += $c;
  }

  foreach ($arrayCount as $v) {
    $arrayFreq[] = ($v / $totalLetters) * 100;
  }

  $arrayLettersCounted = array_combine($arrayLetters, $arrayCount);

  echo "The total letter count: ", $totalLetters;
  echo "<br>";

  // Display frequency analysis result in HTML table
  echo "<h2>Frequency Analysis of Your Text</h2>";
  echo '<table style="width: 40%">'; //start table tag
  echo '<tr>'; //start of header row
  echo '<th>Letter</th>';
  echo '<th>Count</th>';
  echo '<th>Frequency</th>';
  echo '</tr>'; //end of header row
  foreach ($arrayLettersCounted as $k => $v) {
    $convertToFreq = number_format(($v / $totalLetters) * 100, 2, '.');
    echo '<tr>';
    echo "<td>", $k, "</td><td>", $v, "</td><td>", $convertToFreq, "%</td>"; //dynamically add rows
    echo '</tr>';
  }
  echo '</table>'; //end table tag

  // Display sortec frequency analysis result in HTML table
  echo "<h2>Sorted Frequency Analysis of Your Text</h2>";
  echo '<table style="width: 40%">'; //start table tag
  echo '<tr>'; //start of header row
  echo '<th>Letter</th>';
  echo '<th>Count</th>';
  echo '<th>Frequency</th>';
  echo '</tr>'; //end of header row
  arsort($arrayLettersCounted); //sort $arrayLettersCounted
  foreach ($arrayLettersCounted as $k => $v) {
    $convertToFreq = number_format(($v / $totalLetters) * 100, 2, '.');
    echo '<tr>';
    echo "<td>", $k, "</td><td>", $v, "</td><td>", $convertToFreq, "%</td>"; //dynamically add rows
    echo '</tr>';
  }
  echo '</table>'; //end table tag


  // Define a function letterCount
  function letterCount($str, $l)
  {
    $size = strlen($str);
    $count = 0;
    for ($i = 0; $i < $size; $i++) {
      if ($str[$i] == $l) {
        $count++;
      }
    }
    return $count;
  }

  ?>
</body>

</html>