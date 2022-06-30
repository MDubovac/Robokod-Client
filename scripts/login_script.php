<?php
// Data
$username = "";
$password = "";
$error_array = [];
$hash = "";

if (isset($_POST["login_btn"])) {
    $username = mysqli_real_escape_string($conn, $_POST["user_username"]);
    $_SESSION["user_username"] = $username;

    $password = mysqli_real_escape_string($conn, $_POST["user_pass"]);

    $stmt = $conn->prepare("SELECT user_id, user_pass FROM users WHERE user_username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    while($row = $result->fetch_assoc()){
        $hash = $row["user_pass"]; 
    }

    if(password_verify($password, $hash)) {
        // Set auth user the session
        $_SESSION["token"] = $username;

        // Redirect to index
        header("Location: ../pages/customers/adminPanel.php");
    } else {
        array_push($error_array, "Korisnik ne postoji.");
    }

    $stmt->close();
}
