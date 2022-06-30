<?php
    $view = "Admin Panel";
    include_once("../../inc/admin_header.php");
    include_once("../../scripts/comment_script.php");
?>

<div class="container">
    <div class="d-flex justify-content-between">
        <h2>Dodaj komentar</h2>
        <h2>
            <a href="javascript:history.go(-1)">Nazad</a>
        </h2>
    </div>
    <form action="addComment.php" method="POST">
        <div class="form-group my-3">
            <label for="title">Naslov</label>
            <input type="text" name="title" id="title" class="form-control" required oninvalid="this.setCustomValidity('Naslov je obavezan.')" oninput="this.setCustomValidity('')">
        </div>
        <div class="form-group my-3">
            <label for="content">Sadržaj</label>
            <textarea name="content" id="content" cols="30" rows="5" class="form-control" required oninvalid="this.setCustomValidity('Sadržaj je obavezan.')" oninput="this.setCustomValidity('')"></textarea>
        </div>
        <div class="form-group my-3">
            <label for="comment_date">Datum komentara</label>
            <input type="date" name="comment_date" id="comment_date" class="form-control" required oninvalid="this.setCustomValidity('Datum je obavezan.')" oninput="this.setCustomValidity('')">
        </div>
        
        <button type="submit" class="btn btn-primary" name="add_comment_btn">Dodaj</button>
    </form>
</div>

<?php
    include_once("../../inc/admin_footer.php");
?>