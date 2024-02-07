<?php
require('connection.php');

if (isset($_POST['submit'])) {
    $cname = mysqli_real_escape_string($conn, $_POST['cardname']);
    $cnum = mysqli_real_escape_string($conn, $_POST['cardnumber']);
    $exmon = mysqli_real_escape_string($conn, $_POST['expmonth']);
    $exyear = mysqli_real_escape_string($conn, $_POST['expyear']);
    $cvv = mysqli_real_escape_string($conn, $_POST['cvv']);

    $query = "INSERT INTO `payment`(`name`, `card_num`, `ex_mon`, `ex_year`, `cvv`, `pay_date`, `pay_time`) VALUES ('$cname', '$cnum', '$exmon', '$exyear', '$cvv', NOW(), NOW())";

    if ($result = mysqli_query($conn, $query)) {
        echo "
        <script>
        alert('Details Received.');
        window.location.href='cat.php'; // Redirect to login page
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Cannot Run Query: " . mysqli_error($conn) . "');
            window.location.href='order.php';
        </script>
        ";
    }
}
?>
