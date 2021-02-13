<?php
include 'config/db_connect.php';

$items = $conn->query("SELECT * FROM `art` LIMIT 4");

include 'php/header.php';
?>
    <div class="row">
        <div class="col-12 text-center">
            <h2> "תחלום גדול, תגיע רחוק"</h2>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col-4">
            <h2 style="color: darkred;"><b>הסיפור שלנו</b></h2>
            <p style="color: darkred;">
                ניר אברהם מקים העמותה הוא גדל כמה שמוגדר היום נוער בסיכון עבר ילדות לא פשוטה עד אשר הגיעה עזרה מהסביבה שעזרו לו להתייצב ולהצליח בחיים, וכעת הוא מקדיש את כל חייו למען לנוער שבסיכון    " כל עוד יש לי את היכולות את כאן לעזור לילדים לא לתקן את מה שאת חוויותי"
            </p>
        </div>
        <div class="col-4 text-center">
            <a href="">
                <img class="img" src="images/troma.jpg" height="250" width="250" alt="" >
            </a>
        </div>
        <div class="col-4">
            <h2 style="color: darkred;"><b>למה לתרום?</b></h2>
            <p style="color: darkred;">
                אנחנו עמותה שמוכרת יצירות של נוער בסיכון כאשר כל ההכנסות נתרם לעמותה שדואגת לעתיד בטוח יותר עבור הנוער באמצעות מגורים ומחיה עם פיקוח של העמותה ובנוסף לתשתית נותנים להם הכשרה למקצוע לעתיד אף דואגת להם למקום עבודה הראשון שיקבל אותם
            </p>
        </div>
    </div>

    <div class="row mb-5">
        <div class="col-12 text-center">
            <h2>
            בואו תרשמו עכשיו לעמותה ואנו נעדכן אתכם בכל פעילות שלנו
            <a href="newsletters.php" class="But" style="color: white;">הרשם עכשיו</a>
            </h2>
        </div>
    </div>
    <hr>
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
<?php
include 'php/footer.php';
