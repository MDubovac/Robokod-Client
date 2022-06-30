<?php
// Data
$keyword = "";

if (isset($_POST["search_customer_btn"])) {
    $keyword = mysqli_real_escape_string($conn, $_POST["keyword"]);
    $keyword = strip_tags($keyword);

    
}
