<?php
    $view = "Admin Panel";
    include_once("../../inc/admin_header.php");
    include_once("../../scripts/customer_script.php");

    $token = $_SESSION["token"];

    // Get User ID
    $stmt = $conn->prepare("SELECT * FROM users WHERE user_username = ?");
    $stmt->bind_param("s", $token);
    $stmt->execute();
    $result = $stmt->get_result();
    while ($row = $result->fetch_assoc()){
        $uuid = $row["user_id"];
        $_SESSION["uuid"] = $uuid;
    }
    $stmt->close();

    // Get all the customers by user id
    $sql = "SELECT * FROM customers WHERE user_id = '$uuid'";
    $customers = mysqli_query($conn, $sql);
?>

<div class="container">
    <h2>Lista roditelja</h2>
    <a href="./addCustomer.php" class="btn btn-outline-primary my-3">
        Dodaj roditelja
        <i class="fa fa-plus-circle"></i>
    </a>

    <table class="table table-bordered mt-3">
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
            <?php foreach ($customers as $customer) { ?>
                <tr>
                    <td>
                        <a href="./viewCustomer.php?id=<?php echo $customer["customer_id"] ?>">
                            <?php echo $customer["fname"] . " " .  $customer["lname"]?>
                        </a>
                    </td>
                    <td><?php echo $customer["email"] ?></td>
                    <td><?php echo $customer["num"] ?></td>
                    <td><?php echo $customer["jmbg"] ?></td>
                    <td>
                        <div class="d-flex">
                            <form action="./editCustomer.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo $customer["customer_id"] ?>">
                                <input type="submit" name="edit" class="btn btn-outline-primary" value="Izmeni">
                            </form>
                            <form action="adminPanel.php" method="POST" class="mx-3" onsubmit="return confirm('Da li ste sigurni da želite da obrišete ovog korisnika?');">
                                <input type="hidden" name="id" value="<?php echo $customer["customer_id"] ?>" />
                                <input type="submit" name="delete" class="btn btn-outline-danger" value="Ukloni">
                            </form>
                        </div>
                    </td>
                </tr>
            <?php } ?>

        </tbody>
    </table>

</div>

<?php
    include_once("../../inc/admin_footer.php");
?>