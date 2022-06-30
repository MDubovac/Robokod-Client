<?php
// Data
$fname = "";
$lname = "";
$email = "";
$num = "";
$jmbg = "";


if (isset($_POST["add_customer_btn"])) {
    $fname = mysqli_real_escape_string($conn, $_POST["fname"]);
    $fname = strip_tags($fname);

    $lname = mysqli_real_escape_string($conn, $_POST["lname"]);
    $lname = strip_tags($lname);

    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $email = strip_tags($email);

    $num = mysqli_real_escape_string($conn, $_POST["num"]);
    $num = strip_tags($num);

    $jmbg = mysqli_real_escape_string($conn, $_POST["jmbg"]);
    $jmbg = strip_tags($jmbg);

    if ($stmt = $conn->prepare("INSERT INTO customers (fname, lname, email, num, jmbg, user_id) VALUES (?, ?, ?, ?, ?, ?)")) {
        $stmt->bind_param("sssssd", $fname, $lname, $email, $num, $jmbg, $_SESSION["uuid"]);
        $stmt->execute();
        $stmt->close();
        header("Location: ./adminPanel.php");
    }
}

if (isset($_POST["update_customer_btn"])) {
    $fname = mysqli_real_escape_string($conn, $_POST["fname"]);
    $fname = strip_tags($fname);

    $lname = mysqli_real_escape_string($conn, $_POST["lname"]);
    $lname = strip_tags($lname);

    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $email = strip_tags($email);

    $num = mysqli_real_escape_string($conn, $_POST["num"]);
    $num = strip_tags($num);

    $jmbg = mysqli_real_escape_string($conn, $_POST["jmbg"]);
    $jmbg = strip_tags($jmbg);

    $id = $_POST["id"];

    if ($stmt = $conn->prepare("UPDATE customers SET fname = ?, lname = ?, email = ?, num = ?, jmbg = ? WHERE customer_id = ?")) {
        $stmt->bind_param("sssssd", $fname, $lname, $email, $num, $jmbg, $id);
        $stmt->execute();
        $stmt->close();
        header("Location: ./adminPanel.php");
    }
}

if (isset($_POST["delete"])) {
    $id = $_POST["id"];
    $query = "DELETE FROM customers WHERE customer_id = '$id' ";
    $query_run = mysqli_query($conn, $query);
}