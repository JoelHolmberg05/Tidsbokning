<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/styles.css">
    <title>Tidsbokning</title>
</head>
<body>
trait
<div>
    <form method="post" action="index2.php">

        <label for="Date" id="dateLabel">Datum</label><br>
        <input type="text" id="date" name="Date"><br><br>

        <label for="Time">Tid</label><br>
        <input type="text" id="time" name="Time"><br><br>

        <label for="MassageType">Massage typ</label><br>
        <input type="text" id="massageType" name="MassageType"><br><br>

        <label for="Name">Namn</label><br>
        <input type="text" id="name" name="Name"><br><br>

        <label for="PhoneNmr">Telefonnummer</label><br>
        <input type="text" id="phoneNmr" name="PhoneNmr"><br><br>


        <input type="submit" name="submitbtn" id="submitbtn" value="Submit">
    </form>

    <br><br><br><br><br><br><br><br><br><br><br><br><p id="leMongus">ඞ</p>
</div>

</body>
</html>


<?php
    include 'includes/config.php';


?>