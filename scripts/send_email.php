<?php
// Data
$ime = "";
$prezime = "";
$email = "";
$naslov = "";
$poruka = "";

// When the form is submited
if (isset($_POST["contact_btn"])) {
    // First name
    $ime = filter_var($_POST["ime"], FILTER_SANITIZE_STRING);
    $ime = strip_tags($ime);
    $ime = mysqli_real_escape_string($conn, $ime);

    // Last name
    $prezime = filter_var($_POST["prezime"], FILTER_SANITIZE_STRING);
    $prezime = strip_tags($prezime);
    $prezime = mysqli_real_escape_string($conn, $prezime);

    // Email
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $email = strip_tags($email);
    $email = mysqli_real_escape_string($conn, $email);

    // Title
    $naslov = filter_var($_POST["naslov"], FILTER_SANITIZE_STRING);
    $naslov = strip_tags($naslov);
    $naslov = mysqli_real_escape_string($conn, $naslov);

    // Message
    $poruka = filter_var($_POST["poruka"], FILTER_SANITIZE_STRING);
    $poruka = strip_tags($poruka);
    $poruka = mysqli_real_escape_string($conn, $poruka);

    // Send email
    $to = "mladendubovac98@gmail.com";
    $subject = $naslov;
    $txt = $ime . " " . $prezime . " \r\n" .$poruka;
    $headers = "From: " . $email . "\r\n" .
    "CC: somebodyelse@example.com";

    mail($to,$subject,$txt,$headers);
}