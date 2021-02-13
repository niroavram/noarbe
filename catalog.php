<?php
include 'config/db_connect.php';

$items = $conn->query("SELECT * FROM `art` ");

include 'php/header.php';
?>
    

    <div class="row">
        <div class="col-12 text-center">
            <h2> חנות היצירות</h2>
        </div>
        <?php
        while($row = $items->fetch_assoc() ) { ?>
            <div class="col-12 col-md-6 col-lg-3">
                <h2 style="color: black;"><b><?php echo $row['artist_id']; ?></b></h2>
                <a href="">
                    <img class="img" src="images/<?php echo $row['photo']; ?>" height="150" width="150" alt="" >
                </a>
                <h4> מחיר:
                    <?php echo $row['price']; ?>
                    ש"ח
                </h4>
                <button class="btn btn-success">הוסף לעגלה</button>
            </div>
        <?php
        }
        ?>
    </div>
    <script src="../js/catalogJS.js"></script>
    <script src="../js/arrItemsJs.js"></script>
<?php
include 'php/footer.php';
