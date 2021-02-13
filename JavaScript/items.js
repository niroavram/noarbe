 // create the arr item+arr allItem 
 var arrItem =[]; 

 var allItem = [];
 allItem[0]=['<img src="/Users/Nir/Desktop/WebProject/Images/paint1.jpg" style=width:80px; height: 80px; >',"קלסר מנוף גב 8 טורקיז", "8 ₪", '<button onclick="removeItem(0)">התחרטתי</button>'];
 allItem[1]=['<img src="/Users/Nir/Desktop/WebProject/Images/paint1.jpg" style=width:80px; height: 80px; >',"קלסר מנוף גב 8 ורוד","8 ₪", '<button onclick="removeItem(1)">התחרטתי</button>'];
 allItem[2]=['<img src="/Users/Nir/Desktop/WebProject/Images/paint1.jpg" style=width:80px; height: 80px; >',"קלסר מנוף גב 8 ירוק","8 ₪", '<button onclick="removeItem(2)">התחרטתי</button>'];
 allItem[3]=['<img src="/Users/Nir/Desktop/WebProject/Images/paint1.jpg" style=width:80px; height: 80px; >',"קלסר מנוף גב 8 שחור","8 ₪", '<button onclick="removeItem(3)">התחרטתי</button>'];
 allItem[4]=['<img src="/Users/Nir/Desktop/WebProject/Images/paint1.jpg" style=width:80px; height: 80px; >',"קלסר מנוף גב 8 טורקיז", "8 ₪", '<button onclick="removeItem(0)">התחרטתי</button>'];
 allItem[5]=['<img src="/Users/Nir/Desktop/WebProject/Images/paint1.jpg" style=width:80px; height: 80px; >',"קלסר מנוף גב 8 ורוד","8 ₪", '<button onclick="removeItem(1)">התחרטתי</button>'];
 allItem[6]=['<img src="/Users/Nir/Desktop/WebProject/Images/paint1.jpg" style=width:80px; height: 80px; >',"קלסר מנוף גב 8 ירוק","8 ₪", '<button onclick="removeItem(2)">התחרטתי</button>'];
 allItem[7]=['<img src="/Users/Nir/Desktop/WebProject/Images/paint1.jpg" style=width:80px; height: 80px; >',"קלסר מנוף גב 8 שחור","8 ₪", '<button onclick="removeItem(3)">התחרטתי</button>'];
   
 
 
 
    //add the item to arr-item
     function addItem(index)
     {
         arrItem.push(allItem[index]);
         
     }
     //added to shopping cart
     function addToCart()
     {
         window.alert("המוצר התווסף בהצלחה לסל הקניות שלך! ");
     }
     
 function off()
 {
     document.getElementById("overlayf").style.display = "none";
 }
 
 //print arrItem  in the sale page
 function yes() {
     if(arrItem.length=='0')
     {
          window.alert("טרם נבחרו מוצרים לרכישה" );
     }
     
     
   document.getElementById("overlayf").style.display = "block";
   window.addEventListener("click", function tableItem(){
   
   var  html = "<table><tr>";
    
 for (var i=0; i<arrItem.length; i++)
     {
         for( var j=0;j<4;j++)
         {
             html+="<td>" + arrItem[i][j]+"</td>";
         }
      html += "</tr> <br> <tr>";
      }
   html += "</tr></table>";
   document.getElementById("item").innerHTML = html;
 });
 }
 
 function showItems(){
     var i
     for(i=0;i<allItem.length;i++){
         
     }
 }
 
 function removeItem(index)
 {
     arrItem.pop(arrItem[index]);
 }
 
 function TPrice(){
     var total=0;
     for (var i=0; i<arrItem.length; i++)
     {
         var num = parseInt(arrItem[i][2].replace(/[^0-9]/g,''));
         total+=num;
     }
 
     
     document.getElementById("pc").value= total;
     document.getElementById("totalPrice").submit();
 }
 
  function to_SELL_PAGE() {
         location.replace("../PHP/SalePage.php");
 }
 
 
 
 
 
 