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

    // 3. ARRAYS
// Arrays hold multiple values in a single variable
// Prefer the short [] syntax (PHP 5.4+) over the older array() syntax
    $fruits = ["Apple", "Banana", "Orange"];
    $department = array("CSE", "EEE", "pharmacy");
    for ($i = 0; $i < count($department); $i++) {
        echo "{$department[$i]}" . "<br> "; // Braces {} make complex expressions unambiguous inside "..."
    }


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

    // 4. CONDITIONAL STATEMENTS (if / else)
// Used to make decisions in code
    if ($variable1 > 20) {
        echo "variable1 is greater than 20!<br>";
    } else {
        echo "variable1 is 20 or less.<br>";
    }

    // 5. LOOPS
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

    // 6. FUNCTIONS
// Functions are reusable blocks of code
// Declaring parameter and return types lets PHP catch mistakes early (PHP 7+)
    function greet(string $personName): string
    {
        // Escape data before printing it into HTML to prevent XSS attacks
        return "Welcome, " . htmlspecialchars($personName, ENT_QUOTES, "UTF-8") . "!<br>";
    }

    // Calling the function
    echo greet("Charlie");
    ?>
</body>

</html>