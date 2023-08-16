<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php basics</title>

</head>

<body>
    <h1>php basics<h1>
            <?php
            echo "<h1>My first PHP script!</h1>";
            $color = "red";
            echo $color . " the color <br>";
            echo "color is the second color " . $color . "<br>";
            echo "again doing this thing to make it good to go " . $color;
            // commenting is great in php
            /* 
                comment that spans over multiple lines 
                this is cool
                php comments on the next line 
                ............
            */

            //declaring a variable in php 
            $employeeid = 10;
            $employee_name = 'elon';
            $salary = 1000.0;
            # php variables are case sensitive 
            echo "<br>name : " . $employee_name . "<br>";
            echo "tesing out printing variable name within a sentence like this : $employee_name ******";

            // working with numbers 
            $x = 5;
            $y = 4;
            $result = $x + $y;
            echo "$x + $y = $result";

            $x = "this is a reassigned string";
            echo $x;


            echo "<br> <br> <br>";
            echo "data types";

            $cars = array("volvo", "bmw", "jaguar");
            echo $cars;
            var_dump($cars);

            $var_with_no_value = null;
            echo "<br> this var has no value : " . $var_with_no_value;

            echo strlen($x);
            echo "<br>";
            echo str_word_count($x);

            echo "<br> php largest numbe :" . PHP_INT_MAX;


            echo "<br> looping <br>";

            for ($a = 10; $a < 20; $a++) {
                echo "loop no." . $a . "<br>";
            }

            echo "<br>for each loop<br>";
            foreach ($cars as $car) {
                print("car :" . $car . "<br>");
            }


            // functions 
            function greet()
            {
                echo "hello there!";
            }
            greet();

            function greet_user(string $user_name)
            {
                echo "hello" . $user_name;
            }
            greet_user('lonebots');
            greet_user(1);


            // function with return types 
            function add_numbers(float $num1, float $num2) : float{
                return $num1 + $num2;
            }

            echo "5 + 2 = ".add_numbers(5,2);
            ?>


</body>

</html>