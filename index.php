<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>
 
<html>
<head>    
    <title>Data Pasien Covid 19</title>
</head>
 
<body>
<a href="add.php">Add Pasien </a><br/><br/>
 
    <table width='80%' border=1>
 
    <tr>
        <th>Positif</th> <th>Dirawat</th> <th>Sembuh</th> <th>Meninggal</th> <th>Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['positif']."</td>";
        echo "<td>".$user_data['dirawat']."</td>";
        echo "<td>".$user_data['sembuh']."</td>";
        echo "<td>".$user_data['meninggal']."</td>";    
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>