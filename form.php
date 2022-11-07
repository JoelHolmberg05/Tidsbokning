<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/styles.css">
    <title>Document</title>
</head>
<body>

<div>
    <form method="post" action="index2.php">

        <label for="Date">Datum</label><br>
        <input type="text" id="Date" name="Date"><br><br>

        <label for="Time">Tid</label><br>
        <input type="text" id="Time" name="Time"><br><br>

        <label for="MassageType">Massage typ</label><br>
        <input type="text" id="MassageType" name="MassageType"><br><br>

        <label for="Name">Namn</label><br>
        <input type="text" id="Name" name="Name"><br><br>

        <label for="PhoneNmr">Telefonnummer</label><br>
        <input type="text" id="PhoneNmr" name="PhoneNmr"><br><br>


        <input type="submit" name="submitbtn" id="submitbtn" value="Submit">
    </form>
</div>
</body>
</html>


<?php
    include 'includes/config.php';


?>