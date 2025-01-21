<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 2</title>
</head>
<body>

    <!-- Trying the code in javascript -->
    <script>
        document.write("Hello World!");
    </script>

    <!-- Trying out echo in PHP -->
    <?php 
    echo "<h1>Welcome</h1>";

    echo "<p style='color:blue;'>Glad you're here</p>"; 

    echo '<p>This is my world!</p>';

    // escape characters e.g. \ tells the server that the next letter is plain english
    echo '<p>How\'s everything?</p>';


    // Sample.html file example
    echo "<h1>PHP and Creating Output</h1>";
  
    echo "<p>The PHP echo command can be used to create output.</p>";

    echo "<p>When creating output using echo and PHP, quotes can often cause problems. There are several solutions to using quotes within an echo statement:</p>";
    
    echo "<ul>
        <li>Use HTML special characters</li>
        <li>Alternate between single and double quotes</li>
        <li>Use a backslash to escape quotes</li>
    </ul>";
    
    echo "<h2>More HTML to Convert</h2>";

    echo "<p>PHP says 'Hello World!'</p>";

    //  <p>Can you display a sentence with ' and "?</p>
    // yes
    echo '<p>How\'s everything?</p>';

    echo '<img src="php-logo.jpeg">';
    
    // Variables
    $fName = "Himani";
    $lName = "Bansal";

    // . is used to concatenate and we can access variable values with this $variable name
    echo "Hello, " . $fName . "!";
     
    //Array
    $personalInfo = array("Himani","Bansal","himanibansal1691998@gmail.com","https://www.amazon.ca/");

    echo "<br><br><br>";
    echo $personalInfo[0];

    //In-class activity
    $person['fName']="Shivangi";
    $person['lName']="Goyal";
    $person['email']="himanibansal1691998@gmail.com";
    $person['web']="https://www.amazon.ca/";

    ?>

    <!-- <img src="<?php echo 'https://google.com/image'; ?>" alt="<?php echo 'ALT TAG'; ?>"> -->

    <br> <br>

    <!-- This link directly allows you to email that person -->
    <a href="mailto:<?php echo $person['email']; ?>">Mail me!</a>
    
    <br> <br>

    <!-- This link directly allows you to visit that website -->
    <a href="<?php echo $person['web']; ?>">Visit Amazon</a>
 

    
</body>
</html>