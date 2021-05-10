<?php
require "config.php";
// Escape user inputs for security
$event_name = mysqli_real_escape_string($conn, $_REQUEST['event_name']);
$date= mysqli_real_escape_string($conn, $_REQUEST['date']);
$start_time = mysqli_real_escape_string($conn, $_REQUEST['start_time']);
$end_time = mysqli_real_escape_string($conn, $_REQUEST['end_time']);
$detail = mysqli_real_escape_string($conn, $_REQUEST['detail']);

 
// Attempt insert query execution
$sql = "INSERT INTO events (event_name, date, start_time , end_time , description) VALUES ('$event_name', '$date', '$start_time'  , '$end_time' , '$detail' )";
if(mysqli_query($conn ,$sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute  " ;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Events</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>


form {
  display: block;
  text-align: center;
}

 

input{
  margin: auto;
  display: block;
  width: 50%;
  height: 30px;
  border-radius: 5px;
  transition: all 1s ease;
  overflow: hidden;
  text-align: center;
  min-width: 200px;
}
@import url(https://fonts.googleapis.com/css?family=Roboto:400,300,600,400italic);
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-font-smoothing: antialiased;
  -moz-font-smoothing: antialiased;
  -o-font-smoothing: antialiased;
  font-smoothing: antialiased;
  text-rendering: optimizeLegibility;
}

.container {
  max-width: 400px;
  width: 100%;
  margin: 0 auto;
  position: relative;
}

#event input[type="text"],


#event textarea,
#event button[type="submit"] {
  font: 400 12px/16px "Roboto", Helvetica, Arial, sans-serif;
}

#event {
  background: #F9F9F9;
  padding: 25px;
  margin: 150px 0;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}

#event h3 {
  display: block;
  font-size: 30px;
  font-weight: 300;
  margin-bottom: 10px;
}

#event h4 {
  margin: 5px 0 15px;
  display: block;
  font-size: 13px;
  font-weight: 400;
}

fieldset {
  border: medium none !important;
  margin: 0 0 10px;
  min-width: 100%;
  padding: 0;
  width: 100%;
}

#event input[type="text"],

#event textarea {
  width: 100%;
  border: 1px solid #ccc;
  background: #FFF;
  margin: 0 0 5px;
  padding: 10px;
}

#event input[type="text"]:hover,

#event textarea:hover {
  -webkit-transition: border-color 0.3s ease-in-out;
  -moz-transition: border-color 0.3s ease-in-out;
  transition: border-color 0.3s ease-in-out;
  border: 1px solid #aaa;
}

#event textarea {
  height: 100px;
  max-width: 100%;
  resize: none;
}

#event button[type="submit"] {
  cursor: pointer;
  width: 100%;
  border: none;
  background: #4CAF50;
  color: #FFF;
  margin: 0 0 5px;
  padding: 10px;
  font-size: 15px;
}

#event button[type="submit"]:hover {
  background: #43A047;
  -webkit-transition: background 0.3s ease-in-out;
  -moz-transition: background 0.3s ease-in-out;
  transition: background-color 0.3s ease-in-out;
}

#event button[type="submit"]:active {
  box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.5);
}

</style>
<body>
<?php
 echo "<button class='button'><a href ='index.php'>Calendar</a></button>";
 ?>
<div class="container">  
  <form id="event" action="" method="post">
    <h3>Add Your Event here</h3>
   
    <fieldset>
      <input placeholder="  Event Name:" type="text" name="event_name"  tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
    Date:   <input placeholder="2017-03-02" type="date" name="date"  tabindex="2" required>
    </fieldset>
    <fieldset>
    Start Time: <input placeholder="16:00" type="time" name="start_time"  tabindex="3" required>
    </fieldset>
    <fieldset>
    End Time: <input placeholder="16:00" type="time" name="end_time"  tabindex="4" required>
    </fieldset>
    <fieldset>
    Description: <textarea placeholder="Description goes here....." name="detail" tabindex="5" required></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="event-submit" data-submit="...Sending">Submit</button>
    </fieldset>

  </form>
</div>
</body>
</html>