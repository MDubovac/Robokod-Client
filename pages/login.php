<?php
    $view = "Пријава";
    include_once("../inc/header_client.php");
    include_once("../scripts/login_script.php");
?>

<div class="container my-5">
    <h1 class="mb-4">Prijava</h1>
    <form action="login.php" method="POST">
        <div class="form-group my-2">
            <label for="user_username">Korisničko ime</label>
            <input type="text" id="user_username" name="user_username" class="form-control" required oninvalid="this.setCustomValidity('Korisničko ime je obavezno.')"  oninput="this.setCustomValidity('')">
        </div>
        <div class="form-group my-2">
            <label for="user_pass">Lozinka</label>
            <input type="password" id="user_pass" name="user_pass" class="form-control" required oninvalid="this.setCustomValidity('Lozinka je obavezna.')"  oninput="this.setCustomValidity('')">
            
        </div>
        <p class="text-danger">
            <?php if(in_array("Korisnik ne postoji.", $error_array)){
                echo "Korisnik ne postoji.";
            } else {
                echo "";
            }  
            
            ?>
        </p>
        <p class="tos">
            <h5 class="text-danger">Upozrenje!</h5>
            Ova stranica je namenjena samo za admininstratore ovog sajta. Ukoliko ste ovde dospeli slučajno, molimo vas da napustite ovu stranicu.
        </p>
        <button type="submit" name="login_btn" id="login_btn" class="btn btn-primary my-3 mb-5">
            Prijava
        </button>
    </form>
</div>

<?php
    include_once("../inc/footer_client.php");
?>