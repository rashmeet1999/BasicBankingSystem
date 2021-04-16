<!-- 
Project:- Basic Banking System- TSF Bank
Author:- Rashmeet Kaur
Description:- In this project, a basic banking system is designed, to view customer details and
to transfer money within the registered customers.
Languages:- HTML, CSS, PHP, MySQL

This page of the project fetchs data from the databse using
the account number and displays the details of the customer.
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
   <div class="container3">
   <button class="navigate"><a href="http://localhost/bank/index1.php">Home Page</a></button>
   <button class="navigate"><a href="http://localhost/bank/index2.php">Back</a></button>
   
   <?php
         $gotresult=false;
         $servername = "localhost";
         $username = "root";
         $password = "";
         $dbname = "customer";
         $conn = mysqli_connect($servername, $username, $password, $dbname);
         if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
         }
         
         if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $acc=$_POST['account'];
            if($acc==null){
            echo "<br><h2>Enter the account number</h2>"; exit();}
         $sql="SELECT * FROM `customer` WHERE acc_no = $acc";
         $result=mysqli_query($conn,$sql);
         if($row=mysqli_fetch_assoc($result))
         {
            $gotresult=true;
         }
         }
         if($gotresult)
            {
               echo "<h3>Account No.:  ".$row['acc_no']."<br></h3>";
               echo "<h3>Name:   ".$row['name']."<br></h3>";
               echo "<h3>Phone:  ".$row['ph']."<br></h3>";
               echo "<h3>E-mail: ".$row['email']."<br></h3>";
               echo "<h3>Account Bal:  ".$row['acc_bal']."<br></h3>";
            }
            else
echo "<br><h2>Please enter correct account number!!!!</h2>";
   ?>
   </div>
</body>
</html>

