<?php
    $view = "Admin Panel";
    include_once("../../inc/admin_header.php");

    $keyword = "";

    $uuid = $_SESSION["uuid"];

    if (isset($_GET["keyword"])) {
        $filterValues = $_GET["keyword"];
        $query = "SELECT * FROM students INNER JOIN customers ON students.customer_id = customers.customer_id WHERE user_id = '$uuid' AND CONCAT(students.fname, students.lname) LIKE '%$filterValues%'";
        $customers = mysqli_query($conn, $query);
    }
?>

<div class="container">
    <h2>Pretraga</h2>
    <ul class="nav nav-tabs mb-3">
        <li class="nav-item">
            <a class="nav-link active" href="./searchCustomer.php">Roditelji</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="./searchStudent.php">Polaznici</a>
        </li>
    </ul>

    <div class="row">
        <div class="col-md-6">
            <form class="form-inline my-2 my-lg-0" action="" method="GET">
                <input class="form-control mr-sm-2" value="<?php echo isset($_GET["keyword"]) ?  $_GET["keyword"] : ""  ?>" type="text" name="keyword" placeholder="Ovde ukucajte ime ili prezime roditelja..." aria-label="Search">
                <hr>
                <button class="btn btn-outline-primary my-2 my-sm-0" name="search_customer_btn" type="submit">
                    Pretraga
                    <i class="fa fa-search"></i>
                </button>
            </form>
        </div>
    </div>

    <table class="table table-bordered my-3">
        <thead>
            <tr>
                <th>Ime</th>
                <th>Email</th>
                <th>Br.Telefona</th>
                <th>JMBG</th>
                <th>Akcije</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            if (isset($_GET["keyword"])) {
                foreach ($customers as $c) { 
            ?>
                <tr>
                    <td>
                        <a href="../customers/viewCustomer.php?id=<?php echo $c["customer_id"] ?>">
                            <?php echo $c["fname"] . " " . $c["lname"]?>
                        </a>
                    </td>
                    <td><?php echo $c["email"] ?></td>
                    <td><?php echo $c["num"] ?></td>
                    <td><?php echo $c["jmbg"] ?></td>
                    <td>
                    <div class="d-flex">
                            <form action="../customers/editCustomer.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo $c["customer_id"] ?>">
                                <input type="submit" name="edit" class="btn btn-outline-primary" value="Izmeni">
                            </form>
                            <form action="../customers/adminPanel.php" method="POST" class="mx-3" onsubmit="return confirm('Da li ste sigurni da želite da obrišete ovog korisnika?');">
                                <input type="hidden" name="id" value="<?php echo $c["customer_id"] ?>" />
                                <input type="submit" name="delete" class="btn btn-outline-danger" value="Ukloni">
                            </form>
                        </div>
                    </td>
                </tr>
            <?php
                } 
            }
            ?>
        </tbody>
    </table>
</div>

<?php
    $view = "Admin Panel";
    include_once("../../inc/admin_footer.php");
?>