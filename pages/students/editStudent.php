<?php
    $view = "Admin Panel";
    include_once("../../inc/admin_header.php");
    include_once("../../scripts/student_script.php");

    $id = $_POST["id"];
    $sql = "SELECT * FROM students WHERE student_id = '$id'";
    $student = mysqli_query($conn, $sql);
?>

<div class="container">
    <div class="d-flex justify-content-between">
        <h2>Izmeni polaznika</h2>
        <h2>
            <a href="javascript:history.go(-1)">Nazad</a>
        </h2>
    </div>
    <?php foreach ($student as $s) { ?>
    <form action="editStudent.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $s["student_id"] ?>">
        <input type="hidden" name="cust_id" value="<?php echo $s["customer_id"] ?>">
        <div class="form-group my-3">
            <label for="fname">Ime</label>
            <input type="text" name="fname" id="fname" class="form-control" value=<?php echo $s["fname"] ?> required oninvalid="this.setCustomValidity('Ime je obavezno.')" oninput="this.setCustomValidity('')">
        </div>
        <div class="form-group my-3">
            <label for="lname">Prezime</label>
            <input type="text" name="lname" id="lname" class="form-control" value=<?php echo $s["lname"] ?> required oninvalid="this.setCustomValidity('Prezime je obavezno.')"  oninput="this.setCustomValidity('')">
        </div>
        <div class="form-group my-3">
            <label for="birth_date">Datum rođenja</label>
            <input type="date" name="birth_date" id="birth_date" class="form-control" value=<?php echo $s["birth_date"] ?> required oninvalid="this.setCustomValidity('Datum rođenja je obavezan.')"  oninput="this.setCustomValidity('')">
        </div>
        <div class="form-group my-3">
            <label for="start_date">Datum upisa</label>
            <input type="date" name="start_date" id="start_date" class="form-control" value=<?php echo $s["start_date"] ?> required oninvalid="this.setCustomValidity('Datum upisa je obavezan.')"  oninput="this.setCustomValidity('')">
        </div>
        <button type="submit" class="btn btn-primary" name="update_student_btn">Potvrdi</button>
    </form>
    <?php } ?>
</div>

<?php
    include_once("../../inc/admin_footer.php");
?>