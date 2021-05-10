<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calender</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<center>

<?Php
// To get data of present year  we define   year as 0
   $year=0; 



// Current Year is taken if year is define as 0. 
   if(strlen($year)!= 4){
   $year=date('Y'); 
   }

    echo "<h1> $year</h1>";
    echo "<button class='button'><a href='addevents.php'>Add Event</a></button>";
    echo "<button class='button'><a href ='viewevents.php'>View Events</a></button>";

//to set the number of rows and columns in yearly calendar ( 1 to 12 )
    $row=4;  

    $row_no=0; 

    echo "<table class='main'>";

////// Starting of for loop/// 
    for($m=1;$m<=12;$m++){
        $month =date($m);  // Month 
        $dateObject = DateTime::createFromFormat('!m', $m);
// Month name to display at top
        $monthName = $dateObject->format('F'); 




 // To Finds today's date    
    $d= 2;
//calculate number of days in a month
    $no_of_days = cal_days_in_month(CAL_GREGORIAN, $month, $year); 


 // This will calculate the week day of the first day of the month
    $j= date('w',mktime(0,0,0,$month,1,$year));

    $j=$j-1;  
//// if starting day of the week is Sunday 
    if($j<0){$j=6;}  

// Blank starting cells of the calendar 
    $adj=str_repeat("<td >&nbsp;</td>",$j);  
// Days left after the last day of the month
    $blank_at_end=42-$j-$no_of_days; 
    if($blank_at_end >= 7){$blank_at_end = $blank_at_end - 7 ;} 
// Blank ending cells of the calendar
    $adj2=str_repeat("<td >&nbsp;</td>",$blank_at_end); 



    if(($row_no % $row)== 0){
        echo "</tr><tr>";
        }
        
        echo "<td><table class='main' ><td colspan=6 align=center><h3> $monthName  </h3>
        
        
         </td><td align='center'></td></tr>";
        echo "<tr class='m'><th>S</th><th>M</th><th>T</th><th>W</th><th>T</th><th>F</th><th>S</th></tr><tr>";


        //////// Starting of the days//////////
 for($i=1;$i<=$no_of_days;$i++){
    $pv="'$month'".","."'$i'".","."'$year'";

    // This will display the date inside the calendar cell
    echo $adj."<td><a href='#' onclick=\"post_value($pv);\">$i</a>"; 
    echo " </td>";
    $adj='';
    $j ++;
    if($j==7){echo "</tr><tr>"; 
    $j=0;}
    
    }
    echo $adj2;   
    
    echo "</tr></table></td>";
    
    $row_no=$row_no+1;
    }
    echo "</table>";

?>





</center>


</body>
</html>