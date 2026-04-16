<?php 
$age = readline("Enter your age:");

if ($age >= 60) {
    echo "You're a senior citizen";
} elseif ($age >= 20 ) {
    echo "You're an adult";
} elseif ($age >= 13) {
    echo "You're a minor!";
} else {
    echo "You're a kid!";
}
// if using bolleans always use ==, ===, !==, !===, ?? !?
// you can only run this code through php basic-if-else-statemet.php (or your filename)
?>

