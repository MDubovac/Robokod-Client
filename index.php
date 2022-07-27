<?php
    $view = "О нама";
    include './inc/header_client.php'; ?>
<style>
  <?php include 'css/style.css';
  ?>
</style>
<!-- Landing page -->
<div class="container">
<div class="row mt-5">
  <div class="col-md-6">
    <h1>Добродошли у Робокод!</h1>
    <h3>Центар за технолошко образовање младих.</h3>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit ullam ut, cumque quibusdam molestiae quia accusantium. 
    Necessitatibus ratione iste cumque, nesciunt at illo, molestiae, vitae vero ex eaque possimus unde.

    <div class="d-flex my-4 ">
      <a href="" class="btn btn-outline-primary">
        Сазнајте више!
      </a>
      <a href="" class="btn btn-primary mx-3">
        Јавите нам се!
      </a>
    </div>
    </div>
  <div class="col-md-6">
    <img src="./css/programming.jpg" alt="" width=100%>
  </div>
</div>

<div class="row my-3 mx-2">
  <div class="col-md-3 my-2">
    <div class="p-4 shadow rounded-3" style="background-color: hsl(0, 0%, 94%);">
      <h2>Вести</h2>
      <div class="list-group">
        <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
          <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1">Vest 1</h5>
            <small>Datum ovde</small>
          </div>
          <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.
          </p>
          <small>Donec id elit non mi porta.</small>
        </a>
        <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
          <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1">Vest 2</h5>
            <small class="text-muted">Datum ovde</small>
          </div>
          <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.
          </p>
          <small class="text-muted">Donec id elit non mi porta.</small>
        </a>
        <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
          <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1">Vest 3</h5>
            <small class="text-muted">Datum ovde</small>
          </div>
          <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.
          </p>
          <small class="text-muted">Donec id elit non mi porta.</small>
        </a>
      </div>
    </div>

  </div>
  <div class="col-md-6 text-center my-2">
    <div class="p-4 shadow rounded-3" style="background-color: hsl(0, 0%, 94%);">
      <h2>Ко смо ми?</h2>
      <p>
        <b>
          Робокод у више градова обучава више стотина основаца у областима технике, <br> информатике и рачунарства.
        </b>
      </p>
      <p>
        Школа Робокод нема ограничено трајање курсева, већ се свако дете током стицања знања вештина прати и усмерава.
        Сваке године почетком лета се организује и чувена Робокод Олимпијада, као такмичење у више разних дисциплина, а све дипломе, медаље
        и сви пехари се тад поштено заслуже.
      </p>

      <p>
        Рачунарство је у основи роботике и програмирања, а Робокод има нове и брзе рачунаре. Робокод има и огроман број разних електронских уређаја
        , компонентни, и др.
      </p>

      <p>
        Наши робокодовци већ након првих часова се самостално користе уређајима, јер стално изучавају хардвер и софтвер кроз разне практичне вежбе.
        Предавачи су најбољи инжењери и програмери Електронског, Машинског и др. факултета у Нишу.
      </p>

      <p>
        Робокод је без спонзорисаних реклама стекао славу водеће школе роботике и програмирања. Осим најниже месечне чланарине, Робокод је посебан јер
        ради непрекидно целе године, и организује увек надокнаде свих пропуштених часова.
      </p>

      <a href="./pages/contact.php" type="button" class="btn btn-primary">
        Пишите нам!
      </a>
    </div>

  </div>
  <div class="col-md-3">
    <div class="my-2 p-4 shadow rounded-3" style="background-color: hsl(0, 0%, 94%);">
      <h2>Контакт</h2>
      <div class="col-md-4 col-lg-3 mx-4 col-xl-3 mb-md-0 mb-4">
        <!-- Links -->
        <div class="d-flex">
          <i class="fa fa-envelope me-3 my-1"></i>
          <p>robokod.nis@gmail.com</p>
        </div>
        
        <div class="d-flex">
          <i class="fa fa-phone me-3 my-1"></i>
          <p>065/3235297</p>
        </div>
      </div>
    </div>

    <div class="my-2 p-4 d-flex shadow rounded-3" style="background-color: hsl(0, 0%, 94%);">
      <h4>Документи</h4>
    </div>
    <div class="my-2 p-4 shadow rounded-3" style="background-color: hsl(0, 0%, 94%);">
      <h4>Програми</h4>
    </div>
  </div>
</div>

<!-- Kursevi -->
<div class="container my-5 py-5">
  <h1 class="text-center">
    <i class="fa fa-book"></i>
    Програми
  </h1>
  <div class="row">
    <div class="col-md-3">
      <div class="card shadow my-2 mx-auto" style="width: 18rem; height: 18rem">
        <img class="card-img-top" src="./css/comb.jpg" height="60%">
        <div class="card-body">
          <h5 class="card-title">Комбиновани курс</h5>
          <a href="<?php echo APP_URL ?>/pages/comb_course.php" class="btn btn-primary">Сазнај више!</a>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card shadow my-2 mx-auto" style="width: 18rem; height: 18rem">
        <img class="card-img-top" src="./css/robot.jpg" height="60%">
        <div class="card-body">
          <h5 class="card-title">Роботика</h5>
          <a href="<?php echo APP_URL ?>/pages/robotics.php" class="btn btn-primary">Сазнај више!</a>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card shadow my-2 mx-auto" style="width: 18rem; height: 18rem">
        <img class="card-img-top" src="./css/game-dev.jpg" height="60%">
        <div class="card-body">
          <h5 class="card-title">Програмирање игара</h5>
          <a href="<?php echo APP_URL ?>/pages/game_dev.php" class="btn btn-primary">Сазнај више!</a>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card shadow my-2 mx-auto" style="width: 18rem; height: 18rem">
        <img class="card-img-top" src="./css/programming.jpg" height="60%">
        <div class="card-body">
          <h5 class="card-title">Системско рограмирање</h5>
          <a href="<?php echo APP_URL ?>/pages/python.php" class="btn btn-primary">Сазнај више!</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Lokacije 
<div class="container my-5 py-5">
  <h1 class="text-center">
    <i class="fas fa-map"></i>
    Локације
  </h1>
  <div class="row">
    <div class="col-md-6 my-2">
      <iframe class="shadow"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1451.5177361700914!2d21.896758700617845!3d43.31351685858711!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4755b0af8a2f8179%3A0xa7ca98df4cfde29f!2sEpiskopska%2036%2C%20Ni%C5%A1!5e0!3m2!1ssr!2srs!4v1656598481178!5m2!1ssr!2srs"
        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="col-md-6 my-2">
      <iframe class="shadow"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2902.584710029802!2d21.92336361579259!3d43.32295228174012!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4755b0ebf92acde3%3A0xeabac131ae2461a9!2sRoda%20centar!5e0!3m2!1ssr!2srs!4v1656598536420!5m2!1ssr!2srs"
        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 my-2">
      <iframe class="shadow"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2918.0446718386065!2d21.946932315785443!3d42.99839390254182!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47559d4d978995c7%3A0x2fa1b4acff995dfb!2z0KHRgtC10L_QtSDQodGC0LXQv9Cw0L3QvtCy0LjRm9CwIDgsINCb0LXRgdC60L7QstCw0YY!5e0!3m2!1ssr!2srs!4v1656598598684!5m2!1ssr!2srs"
        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="col-md-6 my-2">
      <iframe class="shadow"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2939.2697175316785!2d21.894563715775444!3d42.54956543110471!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13551f84c9288257%3A0x7e9388714582049a!2z0JPQtdC90LXRgNCw0LvQsCDQkdC10LvQuNC80LDRgNC60L7QstC40ZvQsCAyMywg0JLRgNCw0ZrQtQ!5e0!3m2!1ssr!2srs!4v1656598658250!5m2!1ssr!2srs"
        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
</div> -->
</div>

<?php
    include_once("./inc/footer_client.php");
?>