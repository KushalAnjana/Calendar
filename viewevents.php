<?php
require "config.php";
$sql = "SELECT id, event_name, date, start_time , end_time , description FROM events";
$result = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<br><br><br>
<center> <div class="container">
<?php
 echo "<button class='button'><a href ='index.php'>Calendar</a></button>";
 ?>
    <h2>Your Events</h2>
    <br> <br>
        <div class="row">
          
            <br>
<?php  
            
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
    ?>
            <div class="card w-75">
  <div class="card-body">
    <h5 class="card-title">Event name:<?php echo $row["event_name"] ?></h5>
    <p class="card-text">Date:<?php echo $row["date"] ?></p>
    <p class="card-text">start time:<?php echo $row["start_time"] ?></p>
    <p class="card-text">end time:<?php echo $row["end_time"] ?></p>
    <p class="card-text">Description:<?php echo $row["description"] ?></p>
    

   
  </div>
</div> 
<?php
}
}
?>

</div>

    </div></center>
</body>
</html>