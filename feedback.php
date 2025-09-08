 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <!-- SweetAlert CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <!-- SweetAlert JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        body{
            font-family: arial, sans-serif;
        }
    </style>
</head>
<body>
<?php 
 
require 'config.php';


if (isset($_POST['submitt'])) {
$client = $_POST['client'];
$currentDate = date('Y-m-d');
$gender = $_POST['gender'];
$age = $_POST['age'];
$region = $_POST['region'];
$service = $_POST['service'];
$office = $_POST['office'];
$service_provided = $_POST['service_provided'];
$number_of_transactions = $_POST['numbers_of_transactions'];
// $otherservice = $_POST['other_service'];
$c = $_POST['c'];
$cc = $_POST['cc'];
$ccc = $_POST['ccc'];
$sqd = $_POST['sqd'];
$sqd_one = $_POST['sqd_one'];
$sqd_two = $_POST['sqd_two'];
$sqd_three = $_POST['sqd_three'];
$sqd_four = $_POST['sqd_four'];
$sqd_five = $_POST['sqd_five'];
$sqd_six = $_POST['sqd_six'];
$sqd_seven = $_POST['sqd_seven'];
$sqd_eight = $_POST['sqd_eight'];
$suggestion = $_POST['suggestion'];
$email = $_POST['email'];

$controlNum = $_POST['ctrlNum'];
$ctrl_num = $_POST['ctrl_num'];

    
    // Check if controlNumber already exists
    $sql_verify = "SELECT COUNT(*) AS count FROM offline WHERE controlNumber = ?";
    $stmt = $conn->prepare($sql_verify);
    $stmt->bind_param("s", $controlNum);
    $stmt->execute();
    $stmt->bind_result($count);
    $stmt->fetch();
    $stmt->close();

    // If count > 0, controlNumber already exists (duplicate)
    if ($count > 0) {
                echo '<script>
                    Swal.fire({
                        title: "Error!",
                        text: "Form submission not detected. Control number already exists",
                        icon: "error",
                        confirmButtonText: "OK"
                    }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.replace("walkin.php"); 
                            }
                        });
                </script>';
    } else {
        // Prepare and execute SQL query for insertion
        $sql_insert = "INSERT INTO `poll`(`controlNumber`, `ctrl_num`, `client`, `date`, `gender`, `age`, `region`, `service`, `office`, `service_provided`, `numbers_of_transactions`, `c`, `cc`, `ccc`, `sqd`, `sqd_one`, `sqd_two`, `sqd_three`, `sqd_four`, `sqd_five`, `sqd_six`, `sqd_seven`, `sqd_eight`, `suggestion`, `email`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        
        $stmt_insert = $conn->prepare($sql_insert);
        $stmt_insert->bind_param("sssssssssssssssssssssssss", $controlNum, $ctrl_num, $client, $currentDate, $gender, $age, $region, $service, $office, $service_provided, $number_of_transactions, $c, $cc, $ccc, $sqd, $sqd_one, $sqd_two, $sqd_three, $sqd_four, $sqd_five, $sqd_six, $sqd_seven, $sqd_eight, $suggestion, $email);
        
    if ($stmt_insert->execute()) {
        echo '<script>
            Swal.fire({
                title: "Thank You!",
                text: "Your Feedback is Valuable to Us",
                icon: "success",
                confirmButtonText: "OK"
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.replace("index.php"); 
                }
            });
        </script>';
    } else {
        echo '<script>
            Swal.fire({
                title: "Error!",
                text: "There was an issue with your submission: ' . addslashes($conn->error) . '",
                icon: "error",
                confirmButtonText: "Try Again"
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.replace("walkin.php"); 
                }
            });
        </script>';
    }

    $stmt_insert->close();
}


}else{
        echo '<script>
        Swal.fire({
            title: "Error!",
            text: "Form submission not detected.",
            icon: "error",
            confirmButtonText: "OK"
        }).then((result) => {
                if (result.isConfirmed) {
                    window.location.replace("walkin.php"); 
                }
            });
    </script>';
}
// Close database connection
$conn->close();
?>

</body>
</html