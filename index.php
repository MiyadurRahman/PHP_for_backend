<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div>this is my first php website</div>
    <br>
    <?php
    // 1. VARIABLES & DATA TYPES
// Variables in PHP start with a dollar sign ($)
    $variable1 = 34;           // Integer
    $name = "Alice";           // String (text)
    $price = 19.99;            // Float (decimal)
    $isLearning = true;        // Boolean (true or false)
    
    // 2. OUTPUTTING DATA
// 'echo' is used to print output to the screen
    echo "<h2>Hello, PHP!</h2>";
    echo "My name is $name and my favorite number is $variable1.<br>";

    // 3. STRINGS
// Strings can be written with double or single quotes
    $greeting = "Hello";        // Double quotes allow variables inside ("$name")
    $single = 'World';          // Single quotes keep text exactly as written

    // Concatenation joins strings with the . operator
    echo $greeting . " " . $single . "<br>";

    // Double quotes interpolate variables and escape sequences
    echo "$greeting from PHP!\n"; // \n is a newline (in HTML it looks like a space)
    echo "Tab separated:\tA\tB\tC<br>";

    // Useful string functions
    $msg = "  PHP is fun!  ";
    echo "Length: " . strlen($msg) . "<br>";
    echo "Uppercase: " . strtoupper($msg) . "<br>";
    echo "Trimmed: [" . trim($msg) . "]<br>";
    echo "Replace: " . str_replace("fun", "awesome", trim($msg)) . "<br>";
    echo "First 2 chars: " . substr(trim($msg), 0, 2) . "<br>";
    echo "Position of 'is': " . strpos($msg, "is") . "<br>";

    // String to number conversions (type juggling)
    $numStr = "42";
    echo "42 + 8 = " . ($numStr + 8) . "<br>"; // PHP converts the string automatically

    // heredoc: multi-line strings (like template literals in JS)
    $multi = <<<TEXT
PHP supports heredoc syntax
for multi-line strings.
TEXT;
    echo $multi . "<br>";

    // 4. ARRAYS
// Arrays hold multiple values in a single variable
// Prefer the short [] syntax (PHP 5.4+) over the older array() syntax
    $fruits = ["Apple", "Banana", "Orange"];
    $department = array("CSE", "EEE", "pharmacy");
    for ($i = 0; $i < count($department); $i++) {
        echo "{$department[$i]}" . "<br> "; // Braces {} make complex expressions unambiguous inside "..."
    }

    //another way 
    $languages=array("python","english","arabic");
    echo "$languages[0]";


    echo "The first fruit is: " . $fruits[0] . "<br>"; // Indexes start at 0
    echo "There are " . count($fruits) . " fruits: " . implode(", ", $fruits) . "<br>";

    $array = [1, 2, 3, 4, 5];
    // count($array) gives an array's length (PHP uses a function here,
    // not $array.count() or $array->count() like in JavaScript)
    // Use < instead of <= : the last valid index is count($array) - 1,
    // so <= would read past the end and trigger "Undefined array key" warnings
    for ($i = 0; $i < count($array); $i++) {
        echo "{$array[$i]} "; // Braces {} make complex expressions unambiguous inside "..."
    }
    echo "<br>";

    // foreach is the idiomatic way to visit every element:
    // no index bookkeeping and no off-by-one bugs
    foreach ($array as $number) {
        echo "$number ";
    }
    echo "<br>";



    // Associative arrays use named keys instead of numbers
    $person = [
        "name" => "Bob",
        "age" => 25
    ];
    echo $person["name"] . " is " . $person["age"] . " years old.<br>";

    // 5. CONDITIONAL STATEMENTS (if / else)
// Used to make decisions in code
    if ($variable1 > 20) {
        echo "variable1 is greater than 20!<br>";
    } else {
        echo "variable1 is 20 or less.<br>";
    }

    // 6. LOOPS
// Used to run the same code multiple times
    
    // 'for' loop: good for when you know how many times it should run
    echo "Counting up: ";
    for ($i = 1; $i <= 3; $i++) {
        echo "$i ";
    }
    echo "<br>";

    // 'foreach' loop: specifically designed for looping through arrays
    echo "My fruits are: ";
    foreach ($fruits as $fruit) {
        echo "$fruit ";
    }
    echo "<br>";

    // 7. FUNCTIONS
// Functions are reusable blocks of code
// Declaring parameter and return types lets PHP catch mistakes early (PHP 7+)
    function greet(string $personName): string
    {
        // Escape data before printing it into HTML to prevent XSS attacks
        return "Welcome, " . htmlspecialchars($personName, ENT_QUOTES, "UTF-8") . "!<br>";
    }

    // Calling the function
    echo greet("Charlie");

    // string
    $str = "This th";
echo $str. "<br>";
$lenn = strlen($str);
echo "The length of this string is ". $lenn . ". Thank you <br>";
echo "The number of words in this string is ". str_word_count($str) . ". Thank you
<br>";
echo "The reversed string is ". strrev($str) . ". Thank you <br>";
echo "The search for is in this string is ". strpos($str, "is") .". Thank you <br>";
echo "The replaced string is ". str_replace("is", "at", $str) . ". Thank you <br>";

    ?>
</body>

</html>