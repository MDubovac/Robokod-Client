<?php
    $view = "Галерија";
    include '../inc/header_client.php'; 
?>
<style>
  <?php include '../css/style.css';?>
</style>

<!-- Galerija --> 
<!-- Images used to open the lightbox -->
<div class="row-img my-5" id="main-gall">
    <div class="column">
      <img src="../css/1.png" onclick="openModal();currentSlide(1)" class="hover-shadow my-3">
    </div>
    <div class="column">
      <img src="../css/1.png" onclick="openModal();currentSlide(2)" class="hover-shadow my-3">
    </div>
    <div class="column">
      <img src="../css/1.png" onclick="openModal();currentSlide(3)" class="hover-shadow my-3">
    </div>
    <div class="column">
      <img src="../css/1.png" onclick="openModal();currentSlide(4)" class="hover-shadow my-3">
    </div>
</div>

<!-- The Modal/Lightbox -->
<div id="myModal" class="modal my-5">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 4</div>
      <img src="../css/1.png" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 4</div>
      <img src="../css/1.png" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 4</div>
      <img src="../css/1.png" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">4 / 4</div>
      <img src="../css/1.png" style="width:100%">
    </div>

    <!-- Next/previous controls -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>


<script>
// Open the Modal
function openModal() {
  document.getElementById("myModal").style.display = "block";
}

// Close the Modal
function closeModal() {
  document.getElementById("myModal").style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}

</script>


<?php
    include_once("../inc/footer_client.php");
?>