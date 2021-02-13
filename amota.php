<?php
include 'config/db_connect.php';

$items = $conn->query("SELECT * FROM `amota` ");

include 'php/header.php';
?>
    

    <div class="row">
        <div class="col-12 text-center">
            <h2> העמותות</h2>
        </div>
        <?php
        while($row = $items->fetch_assoc() ) { ?>
            <div class="col-12 col-md-6 col-lg-3">
                <h2 style="color: black;"><b><?php echo $row['name']; ?></b></h2>
                
                <a href="">
                    <img class="img" src="images/<?php echo $row['pic']; ?>" height="150" width="150" alt="" >
                </a>
                <h4><?php echo $row['details']; ?>  </h4>
                <button class="btn btn-success" href="<?php echo $row['link']; ?>">לעמותה</button>
            </div>
        <?php
        }
        ?>
    </div>
<?php
include 'php/footer.php';
