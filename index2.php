<!-- 
Project:- Basic Banking System- TSF Bank
Author:- Rashmeet Kaur
Description:- In this project, a basic banking system is designed, to view customer details and
to transfer money within the registered customers.
Languages:- HTML, CSS, PHP, MySQL

This page of the project is used to view customer details by enterning the account number.
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
    <div class="container1">
    <button class="navigate"><a href="http://localhost/bank/index1.php">Back</a></button>
        <form action="index3.php" method="POST">
            <h2>Enter the account number to know the details</h2>
            <input type="number" class="amount" name ='account'>
            <br>
            <h2> </h2>
            <button type ="submit" class="details">Get details</button><br>
        </form>
    </div>
</body>
</html>