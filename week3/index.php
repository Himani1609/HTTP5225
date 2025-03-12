<!doctype html>
<html>

    <head>
        <title>PHP If Statements</title> 
    </head>

    <body>

        <h1>PHP If Statements</h1> 

        <p>Use PHP echo and variables to output the following link information, use if statements to make sure everything outputs correctly:</p>

        <?php

        // **************************************************
        // Do not edit this code

        // Generate a random number (1, 2, or 3)
        $randomNumber = ceil(rand(1,3));

        // Display the random number
        echo '<p>The random number is '. $randomNumber .'.</p>';

        // Based on the random number PHP will define four variables and fill them with information about Codecademy, W3Schools, or MDN
        
        // The random number is 1, so use Codecademy
        if ($randomNumber == 1)
        {

            $linkName = 'Codecademy';
            $linkURL = 'https://www.codecademy.com/';
            $linkImage = '';
            $linkDescription = 'Learn to code interactively, for free.';

        }

        // The random number is 2, so use W3Schools
        elseif ($randomNumber == 2)
        {

            $linkName = '';
            $linkURL = 'https://www.w3schools.com/';
            $linkImage = 'images/w3schools.png';
            $linkDescription = 'W3Schools is optimized for learning, testing, and training.';

        }

        // The random number is 3, so use MDN
        else
        {

            $linkName = 'Mozilla Developer Network';
            $linkURL = 'https://www.codecademy.com/';
            $linkImage = 'images/mozilla.jpeg';
            $linkDescription = 'The Mozilla Developer Network (MDN) provides information about Open Web technologies.';

        }

        // **************************************************

        // Beginning of the exercise, place all of your PHP code here

        if($linkName == ''){
            echo '<a href="' .$linkURL. '">' .$linkURL . '</a>'; 
            echo '<img src="'. $linkImage.'">';
            echo '<p>'.$linkDescription.'</p>';
        }
        elseif($linkImage ==''){
            echo '<h2>'.$linkName.'</h2>';
            echo '<a href="' .$linkURL. '">' .$linkName . '</a>';
            echo '<p>'.$linkDescription.'</p>';
        }
        else{
            echo '<h2>'.$linkName.'</h2>';
            echo '<a href="' .$linkURL. '">' .$linkName . '</a>';
            echo '<img src="'. $linkImage.'">';
            echo '<p>'.$linkDescription.'</p>';
        }

        // Challenge 1

        echo '<h2>Welcome to the Quirky Zoo Management System!</h2>';

        $randomhour = ceil(rand(1,24));

        echo '<p> Random Hour in 24-hour format for Challenge 1: '.$randomhour.'</p>';

        if($randomhour >= 5 && $randomhour <=9){
            echo '<p>Breakfast: "Bananas, Apples, and Oats"</p>';
        }
        elseif($randomhour >= 12 && $randomhour <=14){
            echo '<p>Lunch: "Fish, Chicken, and Vegetables"</p>';
        }
        elseif($randomhour >= 19 && $randomhour <=21){
            echo '<p>Dinner: "Steak, Carrots, and Broccoli"</p>';
        }
        else{
            echo '<p>The animals can starve!</p>';
        }

        //Challenge 2

        echo '<h2>Welcome to the  The Magic Number Game!</h2>';

        $randomNum = ceil(rand(1,100));

        echo '<p>Random Number for Challenge 2: '.$randomNum.'</p>';

        if($randomNum % 3 == 0 && $randomNum % 5 !== 0){
            echo '<p>The magic number is "Fizz"</p>';
        }
        elseif($randomNum % 5 == 0 && $randomNum % 3 !== 0){
            echo '<p>The magic number is "Buzz"</p>';
        }
        elseif($randomNum % 3 == 0 && $randomNum % 5 == 0){
            echo '<p>The magic number is "FizzBuzz"</p>';
        }
        else{
            echo '<p>The magic number is: '. $randomNum .'</p>';
        }

        ?>
        

    </body>

</html>