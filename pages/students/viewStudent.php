<?php
    $view = "Admin Panel";
    include_once("../../inc/admin_header.php");
    include_once("../../scripts/comment_script.php");

    $token = $_SESSION["token"];
    $id = $_GET["id"];

    $sql_student = "SELECT * FROM students WHERE student_id = '$id'";
    $student = mysqli_query($conn, $sql_student);
    foreach ($student as $s) {
        $_SESSION["student_uuid"] = $s["student_id"];
    }

    $sql_comment = "SELECT * FROM comments WHERE student_id = '$id'";
    $comments = mysqli_query($conn, $sql_comment);

?>

<div class="container">
    <hr>

    <?php foreach ($student as $s) { ?>
        <h4>
            <b>Ime: </b>
            <?php echo $s["fname"] . " " . $s["lname"]?>
        </h4>
        <h4>
            <b>Datum upisa:</b> 
            <?php echo $s["start_date"] ?>
        </h4>
        <h4>
            <b>Datum rođenja: </b>
            <?php echo $s["birth_date"] ?>
        </h4>
    <?php } ?>

    <a href="../comments/addComment.php" class="btn btn-outline-primary my-3">
        Dodaj Kometar
        <i class="fa fa-comment"></i>
    </a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Naslov</th>
                <th>Datum kreiranja</th>
                <th>Akcije</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($comments as $c) { ?>
            <tr>
                <td>
                    <a href="../comments/viewComment.php?id=<?php echo $c["comment_id"] ?>">
                        <?php echo $c["title"] ?>
                    </a>
                </td>
                <td><?php echo $c["comment_date"] ?></td>
                <td>
                    <div class="d-flex">

                        <form action="../comments/editComment.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $c["comment_id"] ?>">
                            <input type="hidden" name="stud_id" value="<?php echo $c["student_id"] ?>">
                            <input type="submit" name="edit" class="btn btn-outline-primary" value="Izmeni">
                        </form>

                        <form action="viewStudent.php" method="POST" class="mx-3" onsubmit="return confirm('Da li ste sigurni da želite da obrišete ovaj komentar?');">
                            <input type="hidden" name="id" value="<?php echo $c["comment_id"] ?>">
                            <input type="hidden" name="stud_id" value="<?php echo $c["student_id"] ?>">
                            <input type="submit" name="delete_comment" class="btn btn-outline-danger" value="Ukloni">
                        </form>

                    </div>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>

<?php
    include_once("../../inc/admin_footer.php");
?>