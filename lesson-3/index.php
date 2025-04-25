<?php
// ==================== LOOPS ====================
// 1. For Loop
echo "For Loop:<br>";
for($i = 1; $i <= 3; $i++) {
    echo "Iteration $i<br>";
}

// 2. While Loop
echo "<br>While Loop:<br>";
$counter = 1;
while($counter <= 3) {
    echo "Loop count: $counter<br>";
    $counter++;
}

// 3. Do-While Loop
echo "<br>Do-While Loop:<br>";
$num = 1;
do {
    echo "Execution $num<br>";
    $num++;
} while($num <= 3);

// ==================== CONDITIONALS ====================
$score = 85;

// 1. If Statement
echo "<br>If Statement:<br>";
if($score > 80) {
    echo "Excellent score!<br>";
}

// 2. Else Statement
echo "<br>If-Else Statement:<br>";
if($score >= 60) {
    echo "Passed<br>";
} else {
    echo "Failed<br>";
}

// 3. Elseif Statement
echo "<br>If-Elseif-Else Statement:<br>";
if($score >= 90) {
    echo "Grade A<br>";
} elseif($score >= 80) {
    echo "Grade B<br>";
} else {
    echo "Grade C<br>";
}

// ==================== TIPS & TRICKS ====================
// Shorten code with ternary operator
$number = 7;
$result = ($number % 2 == 0) ? "Even" : "Odd";
echo "<br>Ternary result: $result<br>";

// Single-line condition without braces
echo "<br>Condition without braces:<br>";
if($score > 80)
    echo "Outstanding!<br>";
else
    echo "Keep practicing!<br>";
?>