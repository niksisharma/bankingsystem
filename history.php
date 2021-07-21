<!-- Displaying the transaction history -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SparksBank</title>
        <?php include 'links.php' ?>   
    
    </head>
    <body>
        <!-- Navigation bar -->
        <?php include 'nav.php' ?>
            <div class="main_div">
                <div class="center_div">
                    <div class="table-responsive">
                        <table>
                            
                                <tr style="text-align:center" class="history">   
                                    <th>Transaction Id</th>
                                    <th>Sender Account Number </th>
                                    <th>Receiver Account Number </th>
                                    <th>Date and Time</th>
                                    <th>Amount</th>
                                </tr>
                            <?php
                                $selectquery = "select * from transactions";
                                $query = mysqli_query($conn, $selectquery);
                                while($res = mysqli_fetch_assoc($query)){
                            ?>
                                <tr>
                                    <td><?php echo $res['trans_id'];?></td>
                                    <td><?php echo $res['from_id'];?></td>
                                    <td><?php echo $res['to_id'];?></td>                        
                                    <td><?php echo $res['date_time'];?></td>
                                    <td><?php echo $res['amount'];?></td>
                                </tr>
                            <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
