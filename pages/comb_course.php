<?php
    $view = "Програми";
    include '../inc/header_client.php'; ?>
<style>
  <?php include '../css/style.css';
  ?>
</style>

<div class="container my-5 py-5">
    <h2 class="py-2">Сви програми</h2>
    <div class="bg-light shadow">
        <ul class="nav nav-pills">
        <li class="nav-item">
            <a class="nav-link active" href="./comb_course.php">Комбиновани курс</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="./robotics.php">Роботика</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="./game_dev.php">Програмирање игара</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="./python.php">Системско програмирање</a>
        </li>
        </ul>

        <div class="py-3 px-5">
            <h3>
                <b>Узраст:</b>
            </h3> 
            <h3>
                - до 4. разреда
            </h3>  <br>
            <h4>
                Комбиновани курс роботике и програмирања је за млађе основце (до 4.разреда).<br>
                Осим Scratch-a, уче се и програми за роботе (LEGO), дронове, 3D штампаче, камере,<br> разне контролере и све о рачунарима.
            </h4>
        </div>
    </div>
</div>


<?php
    include_once("../inc/footer_client.php");
?>