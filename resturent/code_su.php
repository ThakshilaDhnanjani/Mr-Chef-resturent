<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "resturent";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['signup'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Check if passwords match
    if ($password != $confirm_password) {
        echo "
        <script>
            alert('Passwords do not match.');
            window.location.href='register.php';
        </script>
        ";
        exit; // Stop further execution if passwords don't match
    }

    $user_exist_query = "SELECT * FROM register WHERE username = '$username'";
    $result = mysqli_query($conn, $user_exist_query);

    if ($result !== false) {
        if (mysqli_num_rows($result) > 0) {
            $result_fetch = mysqli_fetch_assoc($result);
            echo "
            <script>
                alert('$result_fetch[username] - Username already taken');
                window.location.href='login.php';
            </script>
            ";
        } else {
            $query = "INSERT INTO register(username, email, password) VALUES ('$username', '$email', '$password')";
            if ($result = mysqli_query($conn, $query)) {
                echo "
                <script>
                alert('Registration Successful.');
                window.location.href='home_next.php'; // Redirect to login page
                </script>
                ";
            } else {
                echo "
                <script>
                    alert('Cannot Run Query: " . mysqli_error($conn) . "');
                    window.location.href='login.php';
                </script>
                ";
            }
        }
    } else {
        echo "
        <script>
        alert('Cannot Run Query: " . mysqli_error($conn) . "');
        window.location.href='login.php';
        </script>
        ";
    }

    mysqli_close($conn); // Close the database connection
}
?>
