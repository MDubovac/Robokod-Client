<?php
    $view = "Admin Panel";
    include_once("../../inc/admin_header.php");
    include_once("../../scripts/student_script.php");

    $token = $_SESSION["token"];
    $id = $_GET["id"];

    $sql_customer = "SELECT * FROM customers WHERE customer_id = '$id'";
    $customer = mysqli_query($conn, $sql_customer);
    foreach ($customer as $c) {
        $_SESSION["customer_uuid"] = $c["customer_id"];
    }

    $sql_students = "SELECT * FROM students WHERE customer_id = '$id'";
    $students = mysqli_query($conn, $sql_students);
?>

<div class="container">
    <hr>
    <?php foreach ($customer as $c) { ?>
        <div class="d-flex justify-content-between">
            <h3>
                <b>Ime: </b>
                <?php echo $c["fname"] . " " . $c["lname"] ?>
            </h3>
        </div>
        <h3>
            <b>Email:</b>
            <?php echo $c["email"] ?>
        </h3>
        <h3>
            <b>Br.Telefona:</b>
            <?php echo $c["num"] ?>
        </h3>
        <h3>
            <b>JMBG:</b>
            <?php echo $c["jmbg"] ?>
        </h3>
        <hr>
    <?php } ?>
    <h2>Lista polaznika</h2>
    <a href="../students/addStudent.php" class="btn btn-outline-primary my-3">
        Dodaj Polaznika
        <i class="fa fa-plus-circle"></i>
    </a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Ime</th>
                <th>Datum Upisa</th>
                <th>Datum Rođenja</th>
                <th>Akcije</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($students as $s) { ?>
            <tr>
                <td>
                    <a href="../students/viewStudent.php?id=<?php echo $s["student_id"] ?>">
                        <?php echo $s["fname"] . " " . $s["lname"] ?>
                    </a>    
                </td>
                <td><?php echo $s["start_date"] ?></td>
                <td><?php echo $s["birth_date"] ?></td>
                <td>
                    <div class="d-flex">

                        <form action="../students/editStudent.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $s["student_id"] ?>">
                            <input type="hidden" name="cust_id" value="<?php echo $s["customer_id"] ?>">
                            <input type="submit" name="edit" class="btn btn-outline-primary" value="Izmeni">
                        </form>

                        <form action="viewCustomer.php" method="POST" class="mx-3" onsubmit="return confirm('Da li ste sigurni da želite da obrišete ovog polaznika?');">
                            <input type="hidden" name="id" value="<?php echo $s["student_id"] ?>" />
                            <input type="hidden" name="cust_id" value="<?php echo $s["customer_id"] ?>" />
                            <input type="submit" name="delete_student" class="btn btn-outline-danger" value="Ukloni">
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