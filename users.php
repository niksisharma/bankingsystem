
<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>

    <!-- styles -->
    <?php include 'links.php' ?>

</head>
<body>

<?php include "nav.php" ?>

    
    <main>
        
        <div>
            <table>
                <thead>
                    <tr>
                        <th>Account Number</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Account Balance</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>

                    <?php 

                        $query ="SELECT * FROM users";
                        $res = mysqli_query($conn, $query);

                        while($row = mysqli_fetch_array($res)){
                    ?>

                    <tr>
                        <td><?php echo $row["account_number"] ?></td>
                        <td><?php echo $row["name"] ?></td>
                        <td><?php echo $row["email"] ?></td>
                        <td><?php echo $row["balance"] ?></td>
                        <td><a href="./viewUsers.php?number=<?php echo $row["account_number"] ?> <class=" btn btn-dark btn-sm">View User Profile</a></td>
                       
                    </tr>
                            <?php
                            }
                            ?>
                </tbody>
            
            </table>
        </div>

    </main>

</body>
</html>
