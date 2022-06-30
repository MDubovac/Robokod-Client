<?php
// Data
$title = "";
$content = "";
$comment_date = "";

if (isset($_POST["add_comment_btn"])) {
    $title = mysqli_real_escape_string($conn, $_POST["title"]);
    $title = strip_tags($title);

    $content = mysqli_real_escape_string($conn, $_POST["content"]);
    $content = strip_tags($content);

    $comment_date = mysqli_real_escape_string($conn, $_POST["comment_date"]);
    $comment_date = strip_tags($comment_date);

    if ($stmt = $conn->prepare("INSERT INTO comments (title, content, comment_date, student_id) VALUES (?, ?, ?, ?)")) {
        $stmt->bind_param("sssd", $title, $content, $comment_date, $_SESSION["student_uuid"]);
        $stmt->execute();
        $stmt->close();
        header("Location: ../students/viewStudent.php?id=" . $_SESSION["student_uuid"]);
    }
}

if (isset($_POST["update_comment_btn"])) {
    $title = mysqli_real_escape_string($conn, $_POST["title"]);
    $title = strip_tags($title);

    $content = mysqli_real_escape_string($conn, $_POST["content"]);
    $content = strip_tags($content);

    $comment_date = mysqli_real_escape_string($conn, $_POST["comment_date"]);
    $comment_date = strip_tags($comment_date);

    $id = $_POST["id"];
    $stud_id = $_POST["stud_id"];

    if ($stmt = $conn->prepare("UPDATE comments SET title = ?, content = ?, comment_date = ? WHERE comment_id = ?")) {
        $stmt->bind_param("sssd", $title, $content, $comment_date, $id);
        $stmt->execute();
        $stmt->close();
        header("Location: ../students/viewStudent.php?id=" . $stud_id);
    }
}

if (isset($_POST["delete_comment"])) {
    $id = $_POST["id"];
    $stud_id = $_POST["stud_id"];
    $query = "DELETE FROM comments WHERE comment_id = '$id' ";
    $query_run = mysqli_query($conn, $query);
    header("Location: ../students/viewStudent.php?id=" . $stud_id);
}