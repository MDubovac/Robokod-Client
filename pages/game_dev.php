<?php
    $view = "Програми";
    include '../inc/header_client.php'; ?>
<style>
  <?php include '../css/style.css';
  ?>
</style>

<div class="container my-5 py-5">
    <h2 class="py-2">Сви програми</h2>
    <div class="bg-light">
        <ul class="nav nav-pills">
        <li class="nav-item">
            <a class="nav-link" href="./comb_course.php">Комбиновани курс</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="./robotics.php">Роботика</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="./game_dev.php">Програмирање игара</a>
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
               - од 5. до 8. разреда
            </h3>  <br>
            <h4>
                Програмирање игара је курс намењен за старије основце (5-8.разред). <br>
                Полазници овог курса уче се програмирању и дизајирању видео игара у разним едиторима:<br>
                <ul>
                    <li>Construct 2</li>
                    <li>PyGame</li>
                    <li>GoDot</li>
                    <li>Unity</li>
                </ul>
            </h4>
        </div>
    </div>
</div>


<?php
    include_once("../inc/footer_client.php");
?>