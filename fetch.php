<?php
    $con = mysqli_connect("localhost", "root", "", "Huru");

    if(!$con) {
        die("ERROR: Could not connect."
          .mysqli_connect_error());
      }
  
    if($_SERVER)

    if(isset($_POST['request'])){

        $request = $_POST['request'];

        $query = "SELECT * FROM Registered_Users WHERE Join_As = '$request'";
        $result = mysqli_query($con, $query);
        $count = mysqli_num_rows($result);
    
?>

<table>
    <?php
    if($count){
    
    ?>
    
    <tr>
        <th>Join_As</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone_Number</th>
        <th>Address</th>
    </tr>
    
    <?php
    } else {
        echo "<p style='color:red;'>Sorry! no record found</p>";
    }
    ?>
    <?php
    while($row = mysqli_fetch_assoc($result)){
        ?>
        <tr>
            <td><?php echo $row['Join_As']; ?></td>
            <td><?php echo $row['Name'];?></td>
            <td><?php echo $row['Email']; ?></td>                          
            <td><?php echo $row['Phone_Number']; ?></td>
            <td><?php echo $row['Address']; ?></td>                          
        </tr>
        <?php
    }
    ?>

</table>
<?php
}
?>