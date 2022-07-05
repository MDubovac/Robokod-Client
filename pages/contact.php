<?php
    $view = "Контакт";
    include '../inc/header_client.php'; 
    include '../scripts/send_email.php'; 
?>
<style>
  <?php include '../css/style.css';
  ?>
</style>

<div class="container my-5">
    <h1>Контакт</h1>
    <form action="contact.php" method="POST">
        <div class="row">
            <div class="form-group my-2 col-md-6">
                <label for="ime">Име</label>
                <input type="text" name="ime" class="form-control">
            </div>
            <div class="form-group my-2 col-md-6">
                <label for="prezime">Презиме</label>
                <input type="text" name="prezime" class="form-control">
            </div>
        </div>
        <div class="form-group my-2">
            <label for="email">Email Адреса</label>
            <input type="email" name="email" class="form-control">
        </div>
        <div class="form-group my-2">
            <label for="naslov">Наслов</label>
            <input type="text" name="naslov" class="form-control">
        </div>
        <div class="form-group my-2">
            <label for="poruka">Порука</label>
            <textarea name="poruka" id="poruka" cols="30" rows="5" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary my-2" name="contact_btn">Пошаљи</button>
    </form>
</div>


<?php
    include_once("../inc/footer_client.php");
?>