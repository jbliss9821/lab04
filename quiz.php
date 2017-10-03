<?php
//access the global array called $_POST to get the values from the text fields
$answer1 = $_POST["q1"];
$answer2 = $_POST["q2"];
$answer3 = $_POST["q3"];
$answer4 = $_POST["q4"];
$answer5 = $_POST["q5"];
$correct_count = 0;
$percent_correct = 0;

if($answer1 == "1") {
  $correct_count++;
}
if($answer2 == "1") {
  $correct_count++;
}
if($answer3 == "0") {
  $correct_count++;
}
if($answer4 == "1") {
  $correct_count++;
}
if($answer5 == "Han Solo") {
  $correct_count++;
}

echo '1. What is 1 + 0?<br>';
echo 'Your Answer: '.$answer1.'<br>';
echo 'Correct Answer: 1<br><br>';

echo '2. What is 1 - 0?<br>';
echo 'Your Answer: '.$answer2.'<br>';
echo 'Correct Answer: 1<br><br>';

echo '3. What is 1 * 0?<br>';
echo 'Your Answer: '.$answer3.'<br>';
echo 'Correct Answer: 0<br><br>';

echo '4. What is 1 ^ 0?<br>';
echo 'Your Answer: '.$answer4.'<br>';
echo 'Correct Answer: 1<br><br>';

echo '5. Who shot first?<br>';
echo 'Your Answer: '.$answer5.'<br>';
echo 'Correct Answer: Han Solo<br><br>';

$percent_correct = $correct_count / 5;
$percent_correct = $percent_correct * 100;
echo 'Your Score:<br>';
echo $percent_correct.'%';

?>
