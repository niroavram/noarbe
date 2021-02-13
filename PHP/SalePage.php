
<?php
include 'php/header.php';
?>


            <section class="sectionClass">
                
                <hr>
                <div class= "myCART">
				<h1> העגלה שלי </h1>
                <img  src="../INCLUDES/IMAGES/SALE/12.jpg" class="img-circle" alt="Cinque Terre" >
			    </div>
			  
              <div class="row">
					<div class="col-md detail" id="round">
					   <h1>סכום הקנייה<br></h1>
					   <?php
				      $servername = "localhost";
                    $username = "bddanielle";
                    $password = "wR!buJ90Uq";
                    $dbname = "bddaniel_agudit";
                        $conn = new mysqli($servername, $username, $password, $dbname);
				        $sql =mysqli_query($conn, "SELECT price FROM total_price ORDER BY id_order DESC LIMIT 1") ;
				        $print=mysqli_fetch_row($sql);
				         echo "<p style= 'font-size:50px;  color: red;'><b>".'₪'. $print[0]."</b></p>";
                         ?>
						</div>
					  
					   
				
					
						  <div class="payment_SECTION">
                           <h3>אמצעי תשלום</h3>
                           <p>אנא בחר את אמצעי התשלום איתו אתה מעוניין לבצע את הרכישה</p>
                            <form>
                             <label class="radio-inline">
                              <input type="radio" name="optradio" >  <img  src="../INCLUDES/IMAGES/SALE/10.png"  > PayPAL
                             </label>
                            <label class="radio-inline">
                             <input type="radio" name="optradio">   <img  src="../INCLUDES/IMAGES/SALE/9.png"  >  כרטיס אשראי 
                            </label>
   
                          </form>
                         </div>
                </div>
            </section>
     

            <hr>
            
        </main>

                <section>      
                         
                         <button  onclick="myFunction()" class="btn btn-primary btn-sm btn-block" ><h4> אני מאשר את הרכישה</h4>  </button>
                         
				 
				 </section> 
				 <footer class="footerClass">

            <section class="section1Footer">
                <p>
                    <h4> צרו קשר </h4>
                    <br> :שעות פעילות
                    <br> ימים א-ג 17:00-20:00
                    <br> ימים ד-ה 13:00-14:00
                    <br> ימי שישי, ערבי חג ושבתות - סגור
                    <br> :אימייל
                    <br>
                    <a href="mailto:" https://wwww.aguda@mta.ac.il> <img src="../INCLUDES/IMAGES/SALE/mailLogo.png" style="	width: 42px; height: 42px; border:0;"> </a>
                    <br>
                    <br> :כתובת להגעה
                    <br> ,"המכללה "האקדמית תל אביב-יפו
                    <br> ,רבנו ירוחם
                    <br> ,פינת חבר הלאומים 2
                    <br> תל אביב-יפו
                    <br> 6818211

                </p>
                <h5> :ניתן למצוא אותנו גם כאן </h5>

                <a href="https://www.instagram.com/agudamta/"> <img src="../INCLUDES/IMAGES/SALE/instagram.png" style="	width: 42px; height: 42px; border:0;"> </a>
                <a href="https://www.facebook.com/mtaguda/?notif_id=1571736780708151&notif_t=page_fan&ref=notif"> <img src="../INCLUDES/IMAGES/SALE/facebook.png" style="	width: 30px; height: 30px; border:0;"> </a>
                <a href="https://aguda.mta.ac.il/"> <img src="../INCLUDES/IMAGES/SALE/web.png" style="	width: 42px; height: 42px; border:0;"> </a>
            </section>

            <section class="section3Footer">

                <h5>הרשמה לניוזלטר</h5>
                <p> ?רוצים להיות מעודכנים
                    <br> ?להיות ראשונים לדעת על מוצרים חדשים שהגיעו
                    <br>?לקבל הנחות והטבות שונות
                    <br> .הצטרפו עכשיו לרשימת הדיוור

                </p>

                <form>

                    <div  style="background-color:#f2f2f2">
                        <input class="newsLetter" type="text" placeholder="שם מלא" name="שם מלא" required>
                        <input class="newsLetter" type="text" placeholder="אימייל" name="אימייל" required>
                        <label>
                            <input class="newsLetter" type="checkbox" checked="checked" name="subscribe"> עדכונים למייל
                        </label>
                    
						<input class="newsLetter" type="submit" value="שלח" title="לא פעיל">
                    </div>
                </form>

            </section>

            <section class="section4Footer">
                <hr>
                <p>

   Ⓒ כל הזכויות שמורות לדניאל, רון ואוראל Ⓒ                 </p>
            </section>


        </footer>
</div>


          
		
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
       <script src="../JAVASCRIPT/SalePageJS.js" ></script> 
    
     
</body>

</html>
