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
            <a class="nav-link" href="./game_dev.php">Game Development</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="./python.php">Системско програмирање</a>
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
                Курс системског програмирања намењен је да све полазнике научи синтакси програмског језика, као и најбољим навикама које 
                један програмер треба да има. Поред тога што се учи кроз креирање реалних пројеката, раде се и задаци из разних природних наука.
                Такође, полазничи уче и алгоритме који ће им помоћи у професионалној програмерској каријери.<br>
                Језици које полазници уче:
                <ul>
                    <li>C/C++</li>
                    <li>C#</li>
                    <li>Python</li>
                    <li>Web Design језици</li>
                </ul>
            </h4>
        </div>
    </div>
</div>


<?php
    include_once("../inc/footer_client.php");
?>