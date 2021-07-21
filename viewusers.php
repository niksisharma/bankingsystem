<?php  
    include "connect.php";
    if(isset($_GET["number"])){
        $accno = intval($_GET["number"]);
        $res = mysqli_query($conn, "SELECT * FROM users WHERE account_number = $accno");
        if(mysqli_num_rows($res) != 1){
            echo "<script> alert('error finding your account') ; window.location = 'Users.php' </script>";
        }else{
        
        $rows = mysqli_fetch_array($res);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer info</title>

    <!-- styles -->
<link rel="stylesheet" href="styles.css">

</head>
<body>

<?php include "nav.php" ?>

    
    <main>
       <div class="personal-info">
           <table>
           <tr>
               <td>Account Number :</td>
               <td><?php echo $rows["account_number"] ?></td>
           </tr>
           <tr>
               <td>Name :</td>
               <td><?php echo $rows["name"] ?></td>
           </tr>
           <tr>
               <td>Phone :</td>
               <td><?php echo $rows["phone"] ?></td>
           </tr>
           <tr>
               <td>Email :</td>
               <td><?php echo $rows["email"] ?></td>
           </tr>
           <tr>
               <td>Address :</td>
               <td><?php echo $rows["address"] ?></td>
           </tr>
           <tr>
               <td>Balance :</td>
               <td><?php echo $rows["balance"] ?></td>
           </td>
           </table>
           <div>
               <table >
               <tr><td><a href="./transfer.php?number=<?php echo $rows['account_number'] ?>" class="transfer-page-btn">Transfer Amount</a></td>
               <td><a href="./users.php" class="transfer-page-btn">Go Back</a></td>
               </tr>
               </table>
           </div>
       </div>
    </main>

</body>
</html>

<?php
        }
    }

?>
