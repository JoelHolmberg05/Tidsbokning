<?php
    include 'includes/config.php';

    $queryResult = $conn->query("SELECT * FROM customers");



    if (isset($_POST["submitbtn"])){

        $firstName = $_POST["firstName"];
        $lastName = $_POST["lastName"];
        $phoneNmr = $_POST["phoneNmr"];
        $time = $_POST["time"];
        $date = $_POST["date"];
        $massageType = $_POST["massageType"];
    
    
            if ($conn->query("INSERT INTO customers (firstname,lastname,phone) VALUES ('$firstName','$lastName','$phoneNmr')")){
                echo "Great success!";
                echo "<br> <a href='index.php'>Return to form.</a>";
            }
           
            else {
                echo ":(";
                echo "<br> <a href='form.php'>Return to form.</a>";
            }
            
        }

        foreach ($queryResult as $row){
            {
                //echo skriver ut på sidan. Här skrivs en paragraf ut per rad. Paragrafen innehåller den data som innehåller den info som ska hämtas ut ur databasen.
                echo "<h1>";
                echo $row['firstname'] . "<br>";
                echo "</h1>";
                echo "<p>".$row['lastname']."</p><br>";
                echo "<p>";
                echo $row['phone'] . "<br>";
                echo "</p>";
            }
        }

?>