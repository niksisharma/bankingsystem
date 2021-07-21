<?php

include "connect.php";

if(isset($_POST["transfer"]) && isset($_POST["toAccountNumber"]) && isset($_POST["amount"]) && isset($_POST["myaccount"])){

    $myaccnumber = $_POST["myaccount"];
    $toaccno = $_POST["toAccountNumber"];
    $amount = $_POST["amount"];
    $message =$_POST["message"];

    $query = "SELECT * FROM users WHERE account_number = $myaccnumber";
    $res = mysqli_query($conn, $query );
    $fromAccountDetails = mysqli_fetch_assoc($res);

    $query = "SELECT * FROM users WHERE account_number = $toaccno";
    $res = mysqli_query($conn, $query);
    $toAccountDetails = mysqli_fetch_assoc($res);
    if($amount <0){
        echo "<script> alert('Enter valid amount') ; window.location = 'users.php' </script>";
    }
    else if($myaccnumber == $toaccno){
        echo "<script> alert('You cannot transfer to self') ; window.location = 'users.php' </script>";
    }else if($fromAccountDetails["balance"] - $amount <0){
        echo "<script> alert('Insufficient Balance') ; window.location = 'users.php' </script>";
    }else{
        $fromNewBalance = $fromAccountDetails["balance"] - $amount;
        $toNewBalance = $toAccountDetails["balance"] + $amount;

        $res = mysqli_query($conn, "UPDATE users SET balance = $fromNewBalance WHERE account_number = $myaccnumber");
        $res = mysqli_query($conn, "UPDATE users SET balance = $toNewBalance WHERE account_number = $toaccno");

        $date_time = date("Y/m/d H:i:s");

        $res = mysqli_query($conn, "INSERT INTO `transactions`(`from_id`, `to_id`, `date_time`, `message`, `amount`) VALUES ($myaccnumber,$toaccno,'$date_time','$message',$amount)");

        echo mysqli_error($conn);

        echo "<script> alert('Transaction Successfull') ; window.location = 'users.php' </script>";
    }

}
