<?php
include 'config/db_connect.php';
$message = null;
if(isset($_POST['subscribe'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $conn->query("INSERT INTO `newsletter` (`name`, `email`) VALUES ('$name', '$email')");
    $message = "תודה שנרשמת לרשימת התפוצה שלנו";
}
include 'php/header.php';
?>
    <?php
    if(isset( $message )) {
        echo $message;
    }
    ?>
    <div class="row">
        <div class="col-6">
            <form method="post" action="newsletters.php">
                <div class="form-group">
                    <label for="">שם מלא:</label>
                    <input class="newsLetter" type="text" placeholder="שם מלא" name="name">
                </div>
                <div class="form-group">
                    <label for="">אימייל:</label>
                    <input class="newsLetter" type="text" placeholder="דואר אלקטרוני" name="email">
                </div>
                <input type="submit" name="subscribe" class="btn btn-primary" value="שלח">
            </form>
        </div>
    </div>
<?php
include 'php/footer.php';
