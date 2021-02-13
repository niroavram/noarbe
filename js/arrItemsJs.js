 // create the arr item+arr allItem 
var arrItem =[]; 

var allItem = [];
allItem[0]=['<img src="../INCLUDES/IMAGES/CATALOG/1.jpg" style=width:80px; height: 80px; >',"קלסר מנוף גב 8 טורקיז", "8 ₪", '<button onclick="removeItem(0)">התחרטתי</button>'];
allItem[1]=['<img src="../INCLUDES/IMAGES/CATALOG/2.jpg" style=width:80px; height: 80px; >',"קלסר מנוף גב 8 ורוד","8 ₪", '<button onclick="removeItem(1)">התחרטתי</button>'];
allItem[2]=['<img src="../INCLUDES/IMAGES/CATALOG/3.jpg" style=width:80px; height: 80px; >',"קלסר מנוף גב 8 ירוק","8 ₪", '<button onclick="removeItem(2)">התחרטתי</button>'];
allItem[3]=['<img src="../INCLUDES/IMAGES/CATALOG/4.jpg" style=width:80px; height: 80px; >',"קלסר מנוף גב 8 שחור","8 ₪", '<button onclick="removeItem(3)">התחרטתי</button>'];
allItem[4]=['<img src="../INCLUDES/IMAGES/CATALOG/5.jpg" style=width:80px; height: 80px; >',"דפדפות פנטל - שורה","15 ₪", '<button onclick="removeItem(4)">התחרטתי</button>'];
allItem[5]=['<img src="../INCLUDES/IMAGES/CATALOG/6.jpg" style=width:80px; height: 80px; >',"דפדפות אוקסורד - משבצות","25 ₪", '<button onclick="removeItem(5)">התחרטתי</button>'];
allItem[6]=['<img src="../INCLUDES/IMAGES/CATALOG/7.jpg" style=width:80px; height: 80px; >',"דפדפות אוקספורד - שורה","25 ₪", '<button onclick="removeItem(6)">התחרטתי</button>'];
allItem[7]=['<img src="../INCLUDES/IMAGES/CATALOG/10.jpg" style=width:80px; height: 80px; >',"מחק Rotring B20","2 ₪", '<button onclick="removeItem(7)">התחרטתי</button>'];
allItem[8]=['<img src="../INCLUDES/IMAGES/CATALOG/12.jpg" style=width:80px; height: 80px; >',"סט 3 עופרות 0.7","6 ₪", '<button onclick="removeItem(8)">התחרטתי</button>'];
allItem[9]=['<img src="../INCLUDES/IMAGES/CATALOG/11.jpg" style=width:80px; height: 80px; >',"עפרון מכני ירוק 0.7","5 ₪", '<button onclick="removeItem(9)">התחרטתי</button>'];
allItem[10]=['<img src="../INCLUDES/IMAGES/CATALOG/9.jpg" style=width:80px; height: 80px; >',"טיפקס עט מחיקה","5 ₪", '<button onclick="removeItem(0)">התחרטתי</button>'];
  



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
    else{
    
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





