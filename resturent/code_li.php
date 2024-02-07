<?php
$servername = "Localhost";
$username = "root";
$password = "";
$database = "resturent";

$conn = mysqli_connect($servername, $username, $password, $database);

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM register WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            // User is authenticated, redirect to home page or wherever you want
           header("location:home_next.php");
        } else {
            echo "
            <script>
                alert('Invalid username or password.');
                window.location.href='login.php';
            </script>
            ";
        }
    } else {
        echo "
        <script>
            alert('Cannot Run Query.');
            window.location.href='login.php';
        </script>
        ";
    }
}

?>
