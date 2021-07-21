<?php  
    include "connect.php";
    if(isset($_GET["number"])){
        $accno = intval($_GET["number"]);
        $res = mysqli_query($conn, "SELECT * FROM users WHERE account_number = $accno");
        if(mysqli_num_rows($res) != 1){
            echo "<script> alert('error finding your account') ; window.location = './allCustomers.php' </script>";
        }else{
        
        $rows = mysqli_fetch_assoc($res);

        $query ="SELECT account_number, name FROM users WHERE account_number != $accno";
        $rests = mysqli_query($conn, $query);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer</title>

    <!-- styles -->
    <link rel="stylesheet" href="styles.css">

</head>

<body>

<?php include "nav.php" ?>


    <main>
        <div class="transfer-form">
            <form action="./transferlogic.php" method="POST">
                <h3>Transfer Amount</h3>

                <input type="hidden" name="myaccount" required value="<?php echo $accno;  ?>" id="">

                <div class="field">
                    <label for="selectTo">To Account: </label>
                    <select name="toAccountNumber" required id="selectTo">
                    <?php 
                        while($row = mysqli_fetch_assoc($rests)){
                            echo '<option value="'.$row['account_number'].'">'.$row['account_number'].'('.$row['name'].')</option>';
                        }
                    ?>
                    </select>
                </div>

                <div class="field">
                    <label for="amount">Amount: </label>
                    <input type="number" placeholder="Amount to transfer" required name="amount" id="amount">
                </div>

                <div class="field">
                    <label for="message">Message (Optional):</label>
                    <input type="text" name="message" id="message" placeholder="Small Message">
                </div>

                <div class="field">
                    <input type="submit" value="Transfer Amount" name="transfer">
                </div>

            </form>
        </div>
    </main>

</body>

</html>

<?php
        }
    }

?>
