<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="2">
        <tr>
            <th>id</th>
            <th>Name</th>
            <th>Number</th>
            <th>Paid</th>
            <th>Action</th>
       </tr><?php
       $conn=new mysqli("localhost","root","","mobile");
       $sql="select * from payement WHERE status=0";
       $result = $conn->query($sql);
       if ($result->num_rows >0) {
       
        while($row = $result->fetch_assoc()) {
       
?>
       <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['name']?></td>
            <td><?php echo $row['phone']?></td>
            <td>No Recieved</td>
            <td><a href="approve.php?id=<?php echo $row['id'];?>">Approve</a></td>
       </tr>
       <?php }}?>

    </table>
    
</body>
</html>