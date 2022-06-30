<?php
    $view = "Admin Panel";
    include_once("../../inc/admin_header.php");
    include_once("../../scripts/comment_script.php");

    $id = $_POST["id"];
    $sql = "SELECT * FROM comments WHERE comment_id = '$id'";
    $comment = mysqli_query($conn, $sql);
?>

<div class="container">
    <div class="d-flex justify-content-between">
        <h2>Izmeni komentar</h2>
        <h2>
            <a href="javascript:history.go(-1)">Nazad</a>
        </h2>
    </div>
    <?php foreach ($comment as $c) { ?>
    <form action="editComment.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $c["comment_id"] ?>">
        <input type="hidden" name="stud_id" value="<?php echo $c["student_id"] ?>">
        <div class="form-group my-3">
            <label for="title">Naslov</label>
            <input type="text" name="title" id="title" value="<?php echo $c["title"] ?>" class="form-control" required oninvalid="this.setCustomValidity('Naslov je obavezan.')" oninput="this.setCustomValidity('')">
        </div>
        <div class="form-group my-3">
            <label for="content">Sadržaj</label>
            <textarea name="content" id="content" cols="30" rows="5" class="form-control" required oninvalid="this.setCustomValidity('Sadržaj je obavezan.')" oninput="this.setCustomValidity('')"><?php echo $c["content"] ?></textarea>
        </div>
        <div class="form-group my-3">
            <label for="comment_date">Datum komentara</label>
            <input type="date" name="comment_date" id="comment_date" value="<?php echo $c["comment_date"] ?>" class="form-control" required oninvalid="this.setCustomValidity('Datum je obavezan.')" oninput="this.setCustomValidity('')">
        </div>
        <button type="submit" class="btn btn-primary" name="update_comment_btn">Potvrdi</button>
    </form>
    <?php } ?>
</div>

<?php
    include_once("../../inc/admin_footer.php");
?>