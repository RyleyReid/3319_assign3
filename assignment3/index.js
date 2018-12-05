window.onload = function(){
	prepareListener(); 
}

function prepareListener(){
	var button1 = document.getElementById("showUnwanted");
	button1.addEventListener("click",showUnwanted);
	
	var button2 = document.getElementById("hideUnwanted");
        button2.addEventListener("click",hidenUnwanted);
	
	var button3 = document.getElementById("showProducts");
        button3.addEventListener("click",showProducts);

	var button4 = document.getElementById("hideProducts");
        button4.addEventListener("click",hideProducts);

	var button5 = document.getElementById("showPur");
        button5.addEventListener("click",showPurchases);

        var button6 = document.getElementById("hidePur");
        button6.addEventListener("click", hidePurchases);


	hideAtStart();
}
function showUnwanted(){
	var div = document.getElementById("unwanted");
        div.style.display = 'block';
}
function hidenUnwanted(){
	var div;
	var div = document.getElementById("unwanted");
	div.style.display = 'none';
}
function showProducts(){
        var div = document.getElementById("products");
        div.style.display = 'block';
}
function hideProducts(){
        var div;
        var div = document.getElementById("products");
        div.style.display = 'none';
}
function showPurchases(){
        var div = document.getElementById("pur");
        div.style.display = 'block';
}
function hidePurchases(){
        var div;
        var div = document.getElementById("pur");
        div.style.display = 'none';
}


function hideAtStart() {
  var arrayHide = document.getElementsByClassName("hide");
  for (var i = 0; i < arrayHide.length; i++) {
    arrayHide[i].style.display = "none";
  }
}
