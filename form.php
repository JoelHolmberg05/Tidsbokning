<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <title>Tidsbokning</title>
</head>
<body>
<header>
    <a class="link" href="index.php">Schema</a>
</header>
<div>
    <form method="post" action="formSuccess.php">

        <label class="inputTitle" for="name">First Name</label><br>
        <input type="text" id="name" name="firstName"><br><br>

        <label class="inputTitle" for="lastName">Last Name</label><br>
        <input type="text" id="lastName" name="lastName"><br><br>

        <label class="inputTitle" for="phoneNmr">Phonenumber</label><br>
        <input type="text" id="phoneNmr" name="phoneNmr"><br><br>

        <label class="inputTitle" for="time">Time</label>
        <input type="time" id="time" name="time"><br><br>
    
        <label class="inputTitle" for="date" id="dateLabel">Date</label>
        <input type="date" id="date" name="date"><br><br>

        <label class="inputTitle" for="massageType">Massage type</label>
        <select id="massageType" name="massageType">
            <option value="1">Hot stone</option>
            <option value="2">Aromatherapy</option>
            <option value="3">Deep tissue</option>
            <option value="4">Sports massage</option>
        </select>

        <br><br>

        <input type="submit" name="submitbtn" id="submitbtn" value="Submit">
    </form>

    <br><br><br><br><p id="leMongus">???</p>
</div>

<footer>

</footer>
</body>
</html>


<?php
    include 'includes/config.php';

    /*$queryResult = $conn->query("SELECT * FROM customers");

	//Loop som k??rs en g??ng f??r varje rad som h??mtats fr??n databasen.
	foreach ($queryResult as $row){
		{
			//echo skriver ut p?? sidan. H??r skrivs en paragraf ut per rad. Paragrafen inneh??ller den data som inneh??ller den info som ska h??mtas ut ur databasen.
			echo "<h1>";
			echo $row['firstname'] . "<br>";
			echo "</h1>";
			echo "<p>".$row['lastname']."</p><br>";
			echo "<p>";
			echo $row['phone'] . "<br>";
			echo "</p>";
		}
	}

    if (isset($_POST["submitbtn"])){

        $firstName = $_POST["name"];
        $lastName = $_POST["lastName"];
        $PhoneNmr = $_POST["phoneNmr"];
        $time = $_POST["time"];
        $date = $_POST["date"];
        $massageType = $_POST["massageType"];
    
    
            if ($conn->query("INSERT INTO customers (firstname,lastname,phone) VALUES ('$firstName','$lastName','$phoneNmr')")){
                echo "ez";
                echo "<br> <a href='index.php'>Return to form.</a>";
            }
           
            else {
                echo ":(";
                echo "<br> <a href='index.php'>Return to form.</a>";
            }
             
        }*/

?>