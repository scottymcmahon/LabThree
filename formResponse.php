<!DOCTYPE html>
<html lang="en">

<form action="formResponse.php" method="post">

    <label>Forename</label><input type="text" name="forename">
    <label>Surname</label><input type="text" name="surname">
    <input type="submit" value="Submit">

</form>

<?php
    $forename = $_POST["forename"];
    $surname = $_POST["surname"];
    echo $forename.$surname;
?>

</html>
