<?php
    $view = "Admin Panel";
    include_once("../../inc/admin_header.php");

    $uuid = $_SESSION["uuid"];

    $sql_students = "SELECT * FROM students INNER JOIN customers ON students.customer_id = customers.customer_id WHERE user_id = '$uuid'";
    $students = mysqli_query($conn, $sql_students);
?>

<div class="container">
    <hr>
    <h2>Lista polaznika</h2>

    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>Ime</th>
                <th>Roditelj</th>
                <th>Datum upisa</th>
                <th>Datum rođenja</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($students as $student) { ?>
                <tr>
                    <td>
                        <a href="./viewStudent.php?id=<?php echo $student["student_id"] ?>">
                            <?php echo $student["fname"] . " " .  $student["lname"]?>
                        </a>
                    </td>
                    <td>
                        <a href="../customers/viewCustomer.php?id=<?php echo $student["customer_id"] ?>">
                            Pregled roditelja
                        </a>
                    </td>
                    <td><?php echo $student["start_date"] ?></td>
                    <td><?php echo $student["birth_date"] ?></td>
                </tr>
            <?php } ?>

        </tbody>
    </table>
</div>

<?php
    include_once("../../inc/admin_footer.php");
?>