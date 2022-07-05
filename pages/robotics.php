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
            <a class="nav-link active" href="./robotics.php">Роботика</a>
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
               - од 5. до 8. разреда
            </h3>  <br>
            <h4>
                Овај курс је намењен за старије основце (5-8.разред) и ту се учи све што је везано за машински дизајн, 3D штампаче, 
                поправке свих дронова и програмирање лета, повезивање различитих електронских компоненти, програмирање контролера и 
                симулација кретања роботских система - које сами правимо!
            </h4>
            <h4>
                На курсу роботике се изучавају и системи аутоматике, VR и системи визуелне детекције, софтверски алати за разне
                програме/симулаторе, ...а све се и практично увежбава кроз инсталације и тестирања.
            </h4>
        </div>
    </div>
</div>


<?php
    include_once("../inc/footer_client.php");
?>