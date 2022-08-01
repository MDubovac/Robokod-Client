<?php
$view = "Почетна";
include './inc/header_client.php'; ?>
<style>
  <?php include 'css/style.css';
  ?>
</style>
<!-- Landing page -->
<div class="container">
  <div class="row">
    <div class="col-md-6" id="banner-text">
      <h1>Добродошли у Робокод!</h1>
      <h4>Центар за технолошко образовање деце.</h4>
      <p>

      Робокод је највећа школа робоике и програмирања на југу  Србије.
      У више градова обучава се више стотина основаца у областима технике, информатике и рачунарства.

    </p>
      <div class="d-flex my-4">
        <a href="" class="btn btn-outline-primary">
          Сазнајте више!
        </a>
        <a href="" class="btn btn-primary mx-3">
          Јавите нам се!
        </a>
      </div>
    </div>
    <div class="col-md-6">
      <img src="./css/logo.jpg" class="mx-auto" alt="" width=90%>
    </div>
  </div>
</div>

<div class="findus bg-dark text-light my-5">
  <div class="container">
    <div class="row py-5">
      <div class="col-md-6">
        <h3>Пронађите нас на друштвеним мрежама</h3>
      </div>
      <div class="col-md-6">
        <h2 class="text-end">
          <a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1"><i class="fa fa-facebook"></i></a>
          <a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1"><i class="fa fa-instagram"></i></a>
          <a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1"><i class="fa fa-youtube"></i></a>
        </h2>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid">
<div class="row">
  <div class="col-md-3">
    <img src="./css/vuk2.jpg" width="100%" height="500px">
  </div>
  <div class="col-md-6">
    <img src="./css/14..jpg" width="100%" height="500px">
  </div>
  <div class="col-md-3">
    <img src="./css/vuk1.jpg" width="100%" height="500px">
  </div>
</div>
</div>

<div class="container my-4">
  <div class="row">
    <div class="col-md-12">
      <img src="./css/FB_IMG_1635242866260.jpg" width="100%">
    </div>
  </div>
</div>

<div class="row my-3 mx-2">
  <div class="col-md-9 text-center my-2">
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

    <div class="my-2 p-4 shadow rounded-3" style="background-color: hsl(0, 0%, 94%);">
      <h4>Документи</h4>
      <h5>
        <i class="fa fa-download"></i>
        <a href="./css/flajer.jpg" download>Преузми флајер</a>
      </h5>
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
        <img class="card-img-top" src="./css/44..jpg" height="60%">
        <div class="card-body">
          <h5 class="card-title">Комбиновани курс</h5>
          <a href="<?php echo APP_URL ?>/pages/comb_course.php" class="btn btn-primary">Сазнај више!</a>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card shadow my-2 mx-auto" style="width: 18rem; height: 18rem">
        <img class="card-img-top" src="./css/rob.jpg" height="60%">
        <div class="card-body">
          <h5 class="card-title">Роботика</h5>
          <a href="<?php echo APP_URL ?>/pages/robotics.php" class="btn btn-primary">Сазнај више!</a>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card shadow my-2 mx-auto" style="width: 18rem; height: 18rem">
        <img class="card-img-top" src="./css/vdigre.jpg" height="60%">
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

<!-- Olimpijada -->




</div>

<?php
include_once("./inc/footer_client.php");
?>