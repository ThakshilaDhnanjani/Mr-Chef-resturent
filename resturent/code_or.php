<?php
require('connection.php');

if (isset($_POST['submit'])) {
    $cname = $_POST['cardname'];
    $cnum = $_POST['cardnumber'];
    $exmon = $_POST['expmonth'];
    $exyear = $_POST['expyear'];
    $cvv = $_POST['cvv'];

    $query = "INSERT INTO `payment`(`name`, `card_num`, `ex_mon`, `ex_year`, `cvv`, `pay_date`, `pay_time`) VALUES ($cname, $cnum, $exmon, $exyear, $cvv, NOW(), NOW())";

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
            alert('Cannot Run Query.');
            window.location.href='order.php';
        </script>
        ";
    }
}
?>
