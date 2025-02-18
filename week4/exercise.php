<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 4</title>
</head>
<body>
<?php
// Function to fetch user data from the JSONPlaceholder API
function getUsers() {
    $url = "https://jsonplaceholder.typicode.com/users";
    $data = file_get_contents($url);
    return json_decode($data, true);
}

// Get the list of users
$users = getUsers();

for($x = 0; $x < Count($users); $x++){

    echo "Name: " . $users[$x]["name"] . "<br>";
    echo "Username: " . $users[$x]["username"] . "<br>";
    echo "Email: " . $users[$x]["email"] . "<br>";
    echo "Address: " . $users[$x]["address"]["suite"] . "," . $users[$x]["address"]["street"] . "," . $users[$x]["address"]["city"] . "<br>";
    $latitude = $users[$x]["address"]["geo"]["lat"];
    $longitude = $users[$x]["address"]["geo"]["lng"];
    $apiKey = 'AIzaSyCwoOn6vi6g5sHQie6Ux-h_rAv_HgVLvlk';
    $mapUrl = "https://maps.googleapis.com/maps/api/staticmap?center=$latitude,$longitude&zoom=12&size=600x400&markers=$latitude,$longitude&key=$apiKey";
    echo "<img src='$mapUrl' alt='Map' />";
    echo "<br>"; 
    echo "<br>";
    echo "<br>";

}
?>

</body>
</html>