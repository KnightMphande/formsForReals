<?php

?>

    <form action= "display.php" method="POST">   
        <label for="username">Username</label>
        <input type="text" name="username">

        <label for="password">Enter Password</label>
        <input type="password" name="password">

        <label for="lastName">Last Name</label>
        <input type="text" name="lastName">

        <label for="favoriteColour">Favorite Colour</label>
        <input type="text" name="favoriteColour">

        <label for="favoriteCar">Favorite Car</label>
        <input type="text" name="favoriteCar">

        <input type="submit" >
    </form>

<?php


?>

<?php

$username = $_POST['username'];
$password = $_POST['password'];

//var_dump($_POST);
echo "<p>". $_POST['username']. "</p>";
echo "<p>". $_POST['password']. "</p>";
?>
