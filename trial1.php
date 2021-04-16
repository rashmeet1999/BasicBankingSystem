<!-- 
Project:- Basic Banking System- TSF Bank
Author:- Rashmeet Kaur
Description:- In this project, a basic banking system is designed, to view customer details and
to transfer money within the registered customers.
Languages:- HTML, CSS, PHP, MySQL

This page of the project transaction is performed by updating the database
as per the account numbers entered
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
 <button class="navigate"><a href="http://localhost/bank/index1.php">Home Page</a></button>
     <h3>
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "customer";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $amt=$_POST['amount'];
        if($amt==null)
        {
            echo"<br>Kindly enter the amount to be transfered";
            exit();
        }
        else
        echo "<br>Amount= " . $amt."<br>";
        
        $racc=$_POST['raccount'];
        if($racc==null)
        {
            echo"<br>Kindly enter the account number";
            exit();
        }
        
        
        $sacc=$_POST['saccount'];
        if($sacc==null)
        {
            echo"<br>Kindly enter the account number";
            exit();
        } 
      
        //updating sender's account balance
        $sql1="SELECT * FROM `customer` WHERE `customer`.`acc_no` = $sacc";
        $result1=mysqli_query($conn,$sql1);
        if(!$result1)
        {
            echo "<br>Incorrect account number sender";
            exit();
        }
        $row1=mysqli_fetch_assoc($result1);
        if($row1['acc_bal']>$amt)
        {
            echo "<br>Sender details:-<br>";
            echo "Name: ".$row1['name']."<br>";
            echo "Account No: ".$row1['acc_no']."<br>";
            echo "Balance before transaction:".$row1['acc_bal']."<br>";
            
            $new_amt1=$row1['acc_bal']-$amt;
            
            echo "Balance after transaction:";
            echo $new_amt1;
            
            $sql1="UPDATE `customer` SET `acc_bal` = $new_amt1 WHERE `customer`.`acc_no` = $sacc";
            $result1=mysqli_query($conn,$sql1);
        }
        else
        {
            echo "<br>Sender doesn't have enough balance to transfer money";
            exit();
        }

        //updating reciever's account balance

        $sql="SELECT * FROM `customer` WHERE `customer`.`acc_no` = $racc";
        $result=mysqli_query($conn,$sql);

        if(!$result)
        {
            echo "<br>Incorrect Account number receiver";
            exit();
        }
        
        $row=mysqli_fetch_assoc($result);

        echo "<br><br>Receiver's details:-<br>";
        echo "Name: ".$row['name']."<br>";
        echo "Account No: ".$row['acc_no']."<br>";
        echo "Balance before transaction:".$row['acc_bal']."<br>";

        $new_amt=$row['acc_bal']+$amt;

        echo "Balence after transaction:";
        echo $new_amt;

        $sql="UPDATE `customer` SET `acc_bal` = $new_amt WHERE `customer`.`acc_no` = $racc";
        $result=mysqli_query($conn,$sql);}

        if($result AND $result1)
        echo "<br><h1>Transaction was successful!</h1>";    
?>
</h3>
 </div>   
</body>
</html>