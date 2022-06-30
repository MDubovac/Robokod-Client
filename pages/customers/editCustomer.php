<?php
    $view = "Admin Panel";
    include_once("../../inc/admin_header.php");
    include_once("../../scripts/customer_script.php");

    // Get current customer
    $id = $_POST["id"];
    $sql = "SELECT * FROM customers WHERE customer_id = '$id'";
    $customer = mysqli_query($conn, $sql);
?>

<div class="container">
    <div class="d-flex justify-content-between">
        <h2>Izmeni roditelja</h2>
        <h2>
            <a href="javascript:history.go(-1)">Nazad</a>
        </h2>
    </div>
    <?php foreach ($customer as $c) { ?>
    <form action="editCustomer.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $c["customer_id"] ?>">
        <div class="form-group my-3">
            <label for="fname">Ime</label>
            <input type="text" name="fname" id="fname" value="<?php echo $c["fname"]  ?>" class="form-control" required oninvalid="this.setCustomValidity('Ime je obavezno.')" oninput="this.setCustomValidity('')">
        </div>
        <div class="form-group my-3">
            <label for="lname">Prezime</label>
            <input type="text" name="lname" id="lname" value="<?php echo $c["lname"]  ?>" class="form-control" required oninvalid="this.setCustomValidity('Prezime je obavezno.')"  oninput="this.setCustomValidity('')">
        </div>
        <div class="form-group my-3">
            <label for="email">E-mail adresa</label>
            <input type="email" name="email" id="email" value="<?php echo $c["email"]  ?>" class="form-control" required oninvalid="this.setCustomValidity('Email adresa je obavezna')"  oninput="this.setCustomValidity('')">
        </div>
        <div class="form-group my-3">
            <label for="num">Br.Telefona</label>
            <input type="number" name="num" id="num" value="<?php echo $c["num"]  ?>" class="form-control" required oninvalid="this.setCustomValidity('Broj telefona je obavezan')"  oninput="this.setCustomValidity('')">
        </div>
        <div class="form-group my-3">
            <label for="jmbg">JMBG</label>
            <input type="number" name="jmbg" id="jmbg" value="<?php echo $c["jmbg"]  ?>" class="form-control" required oninvalid="this.setCustomValidity('JMBG je obavezan')"  oninput="this.setCustomValidity('')">
        </div>

        <button type="submit" class="btn btn-primary" name="update_customer_btn">Potvrdi</button>
    </form>
    <?php } ?>
</div>

<?php
    include_once("../../inc/admin_footer.php");
?>