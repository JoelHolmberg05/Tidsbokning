<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <title>Tidsbokning</title>
</head>
<body>
<header>
  <a class="link" href="form.php">Form</a>
</header>
<!--<table id="table" style="width:100%">
  <tr>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Telefonnummer</th>
    <th>Time</th>
    <th>Datum</th>
    <th>Massage type</th>
  </tr>
  <tr>
    <td>balls name</td>
    <td>balls name 2</td>
    <td>balls number</td>
    <td>balls time</td>
    <td>balls date</td>
    <td>balls type</td>
  </tr>
  <tr>
    <td> </td>
    <td> </td>
    <td> </td>
  </tr>
</table>-->



</body>
</html>


<?php
    include 'includes/config.php';

    $queryResult = $conn->query("SELECT * FROM customers INNER JOIN bookning ON customers.cus_id=bookning.customers_id");

    foreach ($queryResult as $row){
      {
          //echo skriver ut på sidan. Här skrivs en paragraf ut per rad. Paragrafen innehåller den data som innehåller den info som ska hämtas ut ur databasen.
          echo "<h1>";
          echo $row['firstname'] . "";
          echo "</h1>";
          echo "<p>".$row['lastname'] . "";
          echo "<p>";
          echo $row['phone'] . "";
          echo "</p>";
      }
  }

?>