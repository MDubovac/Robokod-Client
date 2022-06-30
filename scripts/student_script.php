<?php
// Data
$fname = "";
$lname = "";
$start_date = "";
$birth_date = "";

if (isset($_POST["add_student_btn"])) {
    $fname = mysqli_real_escape_string($conn, $_POST["fname"]);
    $fname = strip_tags($fname);

    $lname = mysqli_real_escape_string($conn, $_POST["lname"]);
    $lname = strip_tags($lname);

    $start_date = mysqli_real_escape_string($conn, $_POST["start_date"]);
    $start_date = strip_tags($start_date);

    $birth_date = mysqli_real_escape_string($conn, $_POST["birth_date"]);
    $birth_date = strip_tags($birth_date);

    if ($stmt = $conn->prepare("INSERT INTO students (fname, lname, start_date, birth_date, customer_id) VALUES (?, ?, ?, ?, ?)")) {
        $stmt->bind_param("ssssd", $fname, $lname, $start_date, $birth_date, $_SESSION["customer_uuid"]);
        $stmt->execute();
        $stmt->close();
        header("Location: ../customers/viewCustomer.php?id=" . $_SESSION["customer_uuid"]);
    }
}

if (isset($_POST["update_student_btn"])) {
    $fname = mysqli_real_escape_string($conn, $_POST["fname"]);
    $fname = strip_tags($fname);

    $lname = mysqli_real_escape_string($conn, $_POST["lname"]);
    $lname = strip_tags($lname);

    $start_date = mysqli_real_escape_string($conn, $_POST["start_date"]);
    $start_date = strip_tags($start_date);

    $birth_date = mysqli_real_escape_string($conn, $_POST["birth_date"]);
    $birth_date = strip_tags($birth_date);

    $id = $_POST["id"];
    $cust_id = $_POST["cust_id"];

    if ($stmt = $conn->prepare("UPDATE students SET fname = ?, lname = ?, start_date = ?, birth_date = ? WHERE student_id = ?")) {
        $stmt->bind_param("ssssd", $fname, $lname, $start_date, $birth_date, $id);
        $stmt->execute();
        $stmt->close();
        header("Location: ../customers/viewCustomer.php?id=" . $cust_id);
    }
}

if (isset($_POST["delete_student"])) {
    $id = $_POST["id"];
    $cust_id = $_POST["cust_id"];
    $query = "DELETE FROM students WHERE student_id = '$id' ";
    $query_run = mysqli_query($conn, $query);
    header("Location: ../customers/viewCustomer.php?id=" . $cust_id);
}