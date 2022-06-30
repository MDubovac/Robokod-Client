<?php
    $view = "Admin Panel";
    include_once("../../inc/admin_header.php");

    $id = $_GET["id"];
    $query = "SELECT * FROM comments WHERE comment_id = '$id'";
    $comment = mysqli_query($conn, $query);
?>

<div class="container">
    <?php foreach ($comment as $c) { ?>
        <div class="d-flex justify-content-between">
            <h2>Pregled komentara</h2>
            <h2>
            <a href = "javascript:history.back()">
                    Nazad
                </a>
            </h2>
        </div>
        <h3>
            <b>Naslov: </b>
            <?php echo $c["title"]?>
        </h3>
        <h3>
            <b>Datum: </b>
            <?php echo $c["comment_date"]?>
        </h3>
        <hr>
        <h3><b>Sadržaj: </b></h3>
        <h4><?php echo $c["content"] ?></h4>
    <?php } ?>
</div>

<?php
    include_once("../../inc/admin_footer.php");
?>