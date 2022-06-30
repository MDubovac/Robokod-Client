<?php
    $view = "Admin Panel";
    include_once("../../inc/admin_header.php");
    include_once("../../scripts/student_script.php");
?>

<div class="container">
    <div class="d-flex justify-content-between">
        <h2>Dodaj polaznika</h2>
        <h2>
            <a href="javascript:history.go(-1)">Nazad</a>
        </h2>
    </div>
    <form action="addStudent.php" method="POST">
        <div class="form-group my-3">
            <label for="fname">Ime</label>
            <input type="text" name="fname" id="fname" class="form-control" required oninvalid="this.setCustomValidity('Ime je obavezno.')" oninput="this.setCustomValidity('')">
        </div>
        <div class="form-group my-3">
            <label for="lname">Prezime</label>
            <input type="text" name="lname" id="lname" class="form-control" required oninvalid="this.setCustomValidity('Prezime je obavezno.')"  oninput="this.setCustomValidity('')">
        </div>
        <div class="form-group my-3">
            <label for="birth_date">Datum rođenja</label>
            <input type="date" name="birth_date" id="birth_date" class="form-control" required oninvalid="this.setCustomValidity('Datum rođenja je obavezan.')"  oninput="this.setCustomValidity('')">
        </div>
        <div class="form-group my-3">
            <label for="start_date">Datum upisa</label>
            <input type="date" name="start_date" id="start_date" class="form-control" required oninvalid="this.setCustomValidity('Datum upisa je obavezan.')"  oninput="this.setCustomValidity('')">
        </div>
        <button type="submit" class="btn btn-primary" name="add_student_btn">Dodaj</button>
    </form>
</div>

<?php
    include_once("../../inc/admin_footer.php");
?>