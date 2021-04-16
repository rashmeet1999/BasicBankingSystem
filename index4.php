<!-- 
Project:- Basic Banking System- TSF Bank
Author:- Rashmeet Kaur
Description:- In this project, a basic banking system is designed, to view customer details and
to transfer money within the registered customers.
Languages:- HTML, CSS, PHP, MySQL

This page of the project is used to enter the detials to perform transaction.
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap" rel="stylesheet">
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Train+One&display=swap" rel="stylesheet">
    
    <title>My Banking System</title>
</head>
<body>
    <div class="container2">
    <form action="trial1.php" method="POST">
            <button class="navigate"><a href="http://localhost/bank/index1.php">Home Page</a></button>
            <button class="navigate"><a href="http://localhost/bank/index3.php">Back</a></button>
            <h4>Amount to be transfered:</h4>
            <input type="number" class="amount" name ="amount">
            <h4>Receiver's Account Number:</h4>
            <input type="number" class="amount" name ="raccount">
            <h4>Sender's Account Number:</h4>
            <input type="number" class="amount" name ="saccount">
            <br>
            <br>
            <button type="submit" class="transfer">Transfer</button>
    </form>
    </div>
</body>
</html>