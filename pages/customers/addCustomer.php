<?php
    $view = "Admin Panel";
    include_once("../../inc/admin_header.php");
    include_once("../../scripts/customer_script.php");
?>

<div class="container">
    <div class="d-flex justify-content-between">
        <h2>Dodaj roditelja</h2>
        <h2>
            <a href="javascript:history.go(-1)">Nazad</a>
        </h2>
    </div>
    <form action="addCustomer.php" method="POST">
        <div class="form-group my-3">
            <label for="fname">Ime</label>
            <input type="text" name="fname" id="fname" class="form-control" required oninvalid="this.setCustomValidity('Ime je obavezno.')" oninput="this.setCustomValidity('')">
        </div>
        <div class="form-group my-3">
            <label for="lname">Prezime</label>
            <input type="text" name="lname" id="lname" class="form-control" required oninvalid="this.setCustomValidity('Prezime je obavezno.')"  oninput="this.setCustomValidity('')">
        </div>
        <div class="form-group my-3">
            <label for="email">E-mail adresa</label>
            <input type="email" name="email" id="email" class="form-control" required oninvalid="this.setCustomValidity('Email adresa je obavezna')"  oninput="this.setCustomValidity('')">
        </div>
        <div class="form-group my-3">
            <label for="num">Br.Telefona</label>
            <input type="number" name="num" id="num" class="form-control" required oninvalid="this.setCustomValidity('Broj telefona je obavezan')"  oninput="this.setCustomValidity('')">
        </div>
        <div class="form-group my-3">
            <label for="jmbg">JMBG</label>
            <input type="number" name="jmbg" id="jmbg" class="form-control" required oninvalid="this.setCustomValidity('JMBG je obavezan')"  oninput="this.setCustomValidity('')">
        </div>

        <button type="submit" class="btn btn-primary" name="add_customer_btn">Dodaj</button>
    </form>
</div>

<?php
    include_once("../../inc/admin_footer.php");
?>