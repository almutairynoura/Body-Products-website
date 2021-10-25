

var button1 =document.getElementById("startbutton");
 button1.addEventListener("click",sstart);
 
function sstart(){


var total=0;
var valueNUM;
var valueCon;
var prodCon;
var prodCode;
 






 
do{
prodCode=window.prompt("write prodect code or $ to exit");
 

switch(prodCode){
case "11-111":
prodCon=window.prompt("write how many prodect you buy","0");
valueCon=parseInt(prodCon);
   var price=240*valueCon;
   //document.writeln("proect sum="+c1+"number number"+valueNUM);
   total+=price;
   break;
case "11-222":
prodCon=window.prompt("write how many prodect you buy","0");
valueCon=parseInt(prodCon);
   var price=7.88*valueCon;
   total+=price;
   break;
 case "22-111":
 prodCon=window.prompt("write how many prodect you buy","0");
valueCon=parseInt(prodCon);
   var price=499*valueCon;
   total+=price;
   break;
   case "22-222":
   prodCon=window.prompt("write how many prodect you buy","0");
valueCon=parseInt(prodCon);
    var price=599*valueCon;
   total+=price;
   break;
   case "33-111":
   prodCon=window.prompt("write how many prodect you buy","0");
valueCon=parseInt(prodCon);
     var price=30*valueCon;
      total+=price;
   break;
    case "33-222":
   prodCon=window.prompt("write how many prodect you buy","0");
valueCon=parseInt(prodCon);
     var price=40*valueCon;
      total+=price;
   break;
   case "44-111":
   prodCon=window.prompt("write how many prodect you buy","0");
valueCon=parseInt(prodCon);
     var price=20*valueCon;
      total+=price;
   break;
case "44-222":
   prodCon=window.prompt("write how many prodect you buy","0");
valueCon=parseInt(prodCon);
     var price=50.80*valueCon;
      total+=price;
   break;
case "55-111":
   prodCon=window.prompt("write how many prodect you buy","0");
valueCon=parseInt(prodCon);
     var price=47*valueCon;
      total+=price;
   break;
   case "55-222":
   prodCon=window.prompt("write how many prodect you buy","0");
valueCon=parseInt(prodCon);
     var price=47*valueCon;
      total+=price;
   break;
    case "11-333":
   prodCon=window.prompt("write how many prodect you buy","0");
valueCon=parseInt(prodCon);
     var price=145*valueCon;
      total+=price;
   break;
    case "22-333":
   prodCon=window.prompt("write how many prodect you buy","0");
valueCon=parseInt(prodCon);
     var price=399*valueCon;
      total+=price;
   break;
    case "33-333":
   prodCon=window.prompt("write how many prodect you buy","0");
valueCon=parseInt(prodCon);
     var price=30*valueCon;
      total+=price;
   break;
   case "44-333":
   prodCon=window.prompt("write how many prodect you buy","0");
valueCon=parseInt(prodCon);
     var price=95*valueCon;
      total+=price;
   break;
   case "55-333":
   prodCon=window.prompt("write how many prodect you buy","0");
valueCon=parseInt(prodCon);
     var price=47*valueCon;
      total+=price;
   break;
   case "11-444":
   prodCon=window.prompt("write how many prodect you buy","0");
valueCon=parseInt(prodCon);
     var price=60*valueCon;
      total+=price;
   
  break;
   case "22-444":
   prodCon=window.prompt("write how many prodect you buy","0");
valueCon=parseInt(prodCon);
     var price=270*valueCon;
      total+=price;
  
     break;
   case "33-444":
   prodCon=window.prompt("write how many prodect you buy","0");
valueCon=parseInt(prodCon);
     var price=30*valueCon;
      total+=price;
   break;
     break;
   case "44-444":
   prodCon=window.prompt("write how many prodect you buy","0");
valueCon=parseInt(prodCon);
     var price=95*valueCon;
      total+=price;
   break;
     break;
   case "55-444":
   prodCon=window.prompt("write how many prodect you buy","0");
valueCon=parseInt(prodCon);
     var price=12.60*valueCon;
      total+=price;
   break;
   
   
   case "11-555":
   prodCon=window.prompt("write how many prodect you buy","0");
valueCon=parseInt(prodCon);
     var price=68.25*valueCon;
      total+=price;
   break;
     case "22-555":
   prodCon=window.prompt("write how many prodect you buy","0");
valueCon=parseInt(prodCon);
     var price=499*valueCon;
      total+=price;
  
     break; 
     case "33-555":
   prodCon=window.prompt("write how many prodect you buy","0");
valueCon=parseInt(prodCon);
     var price=40*valueCon;
      total+=price;
   break;
  
 case "44-555":
   prodCon=window.prompt("write how many prodect you buy","0");
valueCon=parseInt(prodCon);
     var price=80*valueCon;
      total+=price;
   break;
   case "55-555":
   prodCon=window.prompt("write how many prodect you buy","0");
valueCon=parseInt(prodCon);
     var price=52.80*valueCon;
      total+=price;
   break; 
case "11-666":
   prodCon=window.prompt("write how many prodect you buy","0");
valueCon=parseInt(prodCon);
     var price=23.63*valueCon;
      total+=price;
   break;
     case "22-666":
   prodCon=window.prompt("write how many prodect you buy","0");
valueCon=parseInt(prodCon);
     var price=700*valueCon;
      total+=price;
  
     break; 
     case "33-666":
   prodCon=window.prompt("write how many prodect you buy","0");
valueCon=parseInt(prodCon);
     var price=50*valueCon;
      total+=price;
   break;
  
 case "4-666":
   prodCon=window.prompt("write how many prodect you buy","0");
valueCon=parseInt(prodCon);
     var price=18*valueCon;
      total+=price;
   break;
   case "55-666":
   prodCon=window.prompt("write how many prodect you buy","0");
valueCon=parseInt(prodCon);
     var price=40.80*valueCon;
      total+=price;
   break;     
}
}while(prodCode != "$");


 if(total > 2000){
var dis = total*10/100 
var totAfterDis = total - dis ;
 window.alert("You have got 10% Discount !!!\nTotal Price is : "+total +" SAR"+"\nThe total after Discount is : "+totAfterDis+" SAR");}
else if (total>1000 && total<2000){
var dis = total*5/100 ;
var totAfterDis = total - dis ;
 window.alert("You have got 5% Discount !!!\nTotal Price is : "+total +" SAR"+"\nThe total after Discount is : "+totAfterDis+" SAR");}
else {
window.alert("Total Price is : "+total +" SAR");}

}



  
  

