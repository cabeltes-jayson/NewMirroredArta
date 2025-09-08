<?php
// Connection to MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "if0_36144549_testing_db";


$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  
   die("Connection failed: " . $conn->connect_error);
}
$conn->set_charset("utf8mb4");

  #for exporting purpose
// $month = date('Y-11');


$month = date('Y-m');
$lastMonth = date('Y-m-d', strtotime('-1 month'));
$no = 0;

function displayAgeRange($age) {
    switch ($age) {
        case '24':
            return "Below 25";
        case '25':
            return "Between 25 to 34";
        case '35':
            return "Between 35 to 44";
        case '45':
            return "Between 45 to 54";
        case '55':
            return "Between 55 to 64";
        case '64':
            return "65 and Above";
        default:
            return "Invalid or Missing Age";
    }
}

function calculateAndRender($dsp_value, $total, $serviceType = '') {
    if ($total > 0) {
        // Calculate the result
        $result = round(($dsp_value / $total) * 5, 2);
        // Determine the class based on the value
        $class = ($result < 4) ? 'style="color:red;" class="table-danger"' : (($result < 5) ? 'style="color:#808000;" class="table-warning"' : '');
        // Return the table cell with the value, class, and optional service type for identification
        return "<td $class data-service='$serviceType'>" . $result . "</td>";
    }/* else {
        // If the total is 0, show a placeholder
        return "<td class='table-danger' data-service='$serviceType'>N/A</td>";
    }*/
}

function calculateTotalScoreAndRender($values, $total, $divider = 9) {
    if ($total > 0) {
        // Calculate the total score
        $sum = array_reduce($values, function ($carry, $value) use ($total) {
            return $carry + ($value / $total);
        }, 0);
        $result = round(($sum / $divider) * 5, 2);
        
        // Determine the class and style based on the result
        $class = ($result < 5) ? 'table-warning' : 'table-success';
        $style = ($result < 5) ? 'color:#808000;' : '';
        
        // Return the styled cell
        return "<td style='$style' class='$class'>" . $result . "</td>";
    }/* else {
        // If total is 0, show an error or placeholder
        return "<td class='table-danger'>N/A</td>";
    }*/
}


// Initialize variables to avoid undefined warnings
$total_score_lh = 0;
$total_score_CSHP = 0;
$total_score_WA = 0;
$total_score_1020 = 0;
$total_score_others = 0;
$overall_score = 0;



?>